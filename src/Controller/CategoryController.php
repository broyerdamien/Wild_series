<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/category', name: 'category_')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();

        return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/{categoryName}', name: 'show')]
    public function show(string $categoryName, CategoryRepository $categoryRepository, ProgramRepository $programRepository): Response
    {
        $categories = $categoryRepository->findBy(
            ['name' => $categoryName]
        );

        // var_dump($categories);
        // die();

        if (!$categories) {
            throw $this->createNotFoundException(
                'No category : ' . $categoryName . ' found in category\'s table.'
            );
        }

        $category_id = $categories[0]->getId("id");

        $programInCategories = $programRepository->findBy(
            ['category' => $category_id],
            ['id' => 'DESC'],
            3
        );
        // var_dump($programInCategory);
        // die();


        return $this->render('category/show.html.twig', [
            'categories' => $categories,
            'programInCategories' => $programInCategories
        ]);
    }
}
