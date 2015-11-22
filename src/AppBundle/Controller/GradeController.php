<?php
<<<<<<< Updated upstream
=======
/**
 * Created by PhpStorm.
 * User: guillaumesimon
 * Date: 18/11/15
 * Time: 11:37
 */
>>>>>>> Stashed changes

namespace AppBundle\Controller;

use AppBundle\Entity\Grade;
use AppBundle\Form\GradeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class GradeController extends Controller
{
    /**
     * @Route("/grade", name="grade")
     */
<<<<<<< Updated upstream
    public function indexAction()
    {
        // 1. Doctrine
        $em   = $this->getDoctrine()->getManager();
=======
    public function indexAction (){
        // 1. Doctrine
        $em = $this->getDoctrine()->getManager();
>>>>>>> Stashed changes
        // 2. Repository (LessonRepository)
        $repo = $em->getRepository('AppBundle:Grade');
        // 3. findAll()
        $grades = $repo->findAll();

        return $this->render('grade/grades.html.twig', [
<<<<<<< Updated upstream
            'grades' => $grades,
=======
            'grades'=> $grades,
>>>>>>> Stashed changes
        ]);
    }

    /**
     * @Route("/grade/create", name="grade_create")
     *
<<<<<<< Updated upstream
     * @return \Symfony\Component\HttpFoundation\Response
=======
>>>>>>> Stashed changes
     */
    public function createAction(Request $request)
    {
        $grade = new Grade();
<<<<<<< Updated upstream
        $form  = $this->createForm(new GradeType(), $grade);
        $form->add('submit', 'submit', [
            'label' => 'Create',
        ]);
        $form->handleRequest($request);

        if ($form->isValid()) {
=======
        $form = $this->createForm(new GradeType(), $grade);
        $form->add('submit','submit', [
            'label'=> 'create',
        ]);
        $form->handleRequest($request);
        if ($form->isValid()){
>>>>>>> Stashed changes
            $em = $this->getDoctrine()->getManager();
            $em->persist($grade);
            $em->flush();

            return $this->redirectToRoute('grade');
        }

        return $this->render('grade/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

<<<<<<< Updated upstream
    /**
     * @Route("/grade/{id}/edit", name="grade_edit")
=======

    /**
     * @Route("/grade/{id}/edit",name="grade_edit")
>>>>>>> Stashed changes
     */
    public function updateAction(Request $request, $id)
    {
        $grade = $this->getDoctrine()->getManager()->getRepository('AppBundle:Grade')->find($id);

        if (null === $grade)
            throw $this->createNotFoundException(sprintf(
<<<<<<< Updated upstream
                'Grade n°%d not found.',
                $id
            ));

        $form  = $this->createForm(new GradeType(), $grade);
        $form->add('submit', 'submit', [
            'label' => 'Update',
        ]);
        $form->handleRequest($request);

        if ($form->isValid()) {
=======
                'Grade n%d found.',
                $id
                ));

        $form = $this->createForm(new GradeType(), $grade);
        $form->add('submit','submit', [
            'label'=> 'update',
        ]);
        $form->handleRequest($request);
        if ($form->isValid()){
>>>>>>> Stashed changes
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('grade');
        }

        return $this->render('grade/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    /**
     * @Route("/api/grade", name="api_grade")
     */
    public function apiIndexAction()
    {
<<<<<<< Updated upstream
        $repo   = $this->getDoctrine()->getManager()->getRepository('AppBundle:Grade');
=======
        $repo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Grade');
>>>>>>> Stashed changes
        $grades = $repo->findAllArray();

        return new JsonResponse($grades);
    }
<<<<<<< Updated upstream
}
=======

}
>>>>>>> Stashed changes
