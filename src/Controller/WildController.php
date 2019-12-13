<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProgramRepository;
use App\Repository\CategoryRepository;
use App\Repository\SeasonRepository;
use App\Repository\ActorRepository;
use App\Form\ProgramSearchType;
use App\Entity\Episode;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\ProgramType;
use App\Entity\Actor;

class WildController extends AbstractController
{
/**
* @Route("/wild", name="wild_index")
*/
    public function index(ProgramRepository $programRepository, Request $request)
    {
        $programs = $programRepository->findAll();
        if (!$programs) {
        throw $this->createNotFoundException('No program found in program\'s table.');
    }

    /**
     * Création du formulaire ProgramType créér avec php bin/console make:form
     */
    $form = $this->createForm(ProgramType::class);

    /**
     * Les requètes du formulaire sont manipulés. 
     */
    $form->handleRequest($request);

    /**
     * Si le formulaire est soumis et validé, utilise la magic fonction de doctrine -> getmanager 
     * pour enregistrer les données dans la base de donnée
     */
    if ($form->isSubmitted() && $form->isValid()) {
        $newProgram = $form->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($newProgram);
        $entityManager->flush();
        dump($newProgram);
    }

    return $this->render('wild/index.html.twig', [
    'programs' => $programs,
    'form' => $form->createView()
    ]
    );
}


    /**
     * @Route("/wild/show/{slug<[a-z0-9-]+>}", defaults={"slug" = null}, name="wild_show")
     */
    public function show(?string $slug, ProgramRepository $programRepository)
    {
        if (!$slug) {
            throw $this
            ->createNotFoundException('No slug has been sent to find a program in program\'s table.');
        }
        
        $showName = str_replace('-', ' ', $slug);
        $showName = ucwords($showName);
        $program = $programRepository->findOneBy(['title' => mb_strtolower($showName)]);
        return $this->render('wild/show.html.twig', [
            'showName' => $showName,
            'program' => $program
        ]);
    }
    /**
     * @Route("/wild/category/{categoryName<[a-z]+>}", defaults={"categoryName" = null}, name="show_category")
     */
    public function showByCategory(string $categoryName, CategoryRepository $categoryRepository, ProgramRepository $programRepository)
    {
        $category = $categoryRepository->findOneBy(['name' => mb_strtolower($categoryName)]);
        $programs = $programRepository->findBy(
            ['category' => $category],
            ['id' => 'DESC'],
            3
        );
        return $this->render('wild/category.html.twig', [
            'programs' => $programs,
            'categoryName' => ucwords($categoryName)
        ]);
    }
    /**
     * @Route("/wild/program/{programName<[a-z0-9-]+>}", defaults={"programName" = null}, name="show_program")
     */
    public function showByProgram(string $programName, ProgramRepository $programRepository):Response
    {
        $program = $programRepository->findOneBy(['title' => str_replace('-', ' ',$programName)]);
        $seasons = $program->getSeasons();
        return $this->render('wild/program.html.twig', [
            'program' => $program,
            'seasons' => $seasons,
        ]);
    }
    /**
     * @Route("/wild/season/{seasonId<[0-9]+>}", name="show_season")
     */
    public function showBySeason(int $seasonId, SeasonRepository $seasonRepository)
    {
        $season = $seasonRepository->findOneById($seasonId);
        $program = $season->getProgram();
        $episodes = $season->getEpisodes();
        return $this->render('wild/season.html.twig', [
            'program' => $program,
            'season' => $season,
            'episodes' => $episodes
        ]);
    }
    /**
     * @Route("/wild/episode/{id}", name="show_episode")
     */
    public function showByEpisode(Episode $episode)
    {
        $season = $episode->getSeason();
        $program = $season->getProgram();
        $hyphenizedProgramTitle = strtolower(str_replace(' ', '-', $program->getTitle()));
        return $this->render('wild/episode.html.twig', [
            'episode' => $episode,
            'season' => $season,
            'program' => $program,
            'hyphenizedProgramTitle' => $hyphenizedProgramTitle
        ]);
    }
}