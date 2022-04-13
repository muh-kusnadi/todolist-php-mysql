<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist(): void {

    $todoListRepository = new TodolistRepositoryImpl();
    $todoListService = new TodolistServiceImpl($todoListRepository);
    $todoListView = new TodolistView($todoListService);

    $todoListService->addTodolist("Belajar PHP");
    $todoListService->addTodolist("Belajar PHP OOP");
    $todoListService->addTodolist("Belajar PHP Database");

    $todoListView->showTodolist();

}

function testViewAddTodolist(): void {

    $todoListRepository = new TodolistRepositoryImpl();
    $todoListService = new TodolistServiceImpl($todoListRepository);
    $todoListView = new TodolistView($todoListService);

    $todoListService->addTodolist("Belajar PHP");
    $todoListService->addTodolist("Belajar PHP OOP");
    $todoListService->addTodolist("Belajar PHP Database");

    $todoListService->showTodolist();

    $todoListView->addTodolist();

    $todoListService->showTodolist();

    $todoListView->addTodolist();

    $todoListService->showTodolist();

}

function testViewRemoveTodolist(): void {

    $todoListRepository = new TodolistRepositoryImpl();
    $todoListService = new TodolistServiceImpl($todoListRepository);
    $todoListView = new TodolistView($todoListService);

    $todoListService->addTodolist("Belajar PHP");
    $todoListService->addTodolist("Belajar PHP OOP");
    $todoListService->addTodolist("Belajar PHP Database");

    $todoListService->showTodolist();

    $todoListView->removeTodolist();

    $todoListService->showTodolist();
    
    $todoListView->removeTodolist();

    $todoListService->showTodolist();

}

testViewRemoveTodolist();