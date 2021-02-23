<?php

namespace App\Controller;

use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/api", name="api")
 */
class ApiController extends AbstractController
{
    /**
     * @Route("/tasks", name="tasks")
     */
    public function index(TaskRepository $taskRepository,SerializerInterface $serialiser): Response
    {
//      $task = $taskRepository -> findAll();
//      $json = $serialiser->serialize($task, 'json');
//      return new Response($json);

        $task = $taskRepository-> findAllAsArray();
        return $this->json($task);
    }
}
