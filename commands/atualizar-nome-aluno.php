<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunoRepository = $entityManager->getRepository(Aluno::class);

$id = $argv[1];
$nome = $argv[2];

$aluno = $entityManager->find(Aluno::class, $id);
$aluno->setNome($nome);

$entityManager->flush();
