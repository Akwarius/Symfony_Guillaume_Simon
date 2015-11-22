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

use AppBundle\Entity\Lesson;
use AppBundle\Form\LessonType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
<<<<<<< Updated upstream
=======
use Symfony\Component\HttpFoundation\Request;
>>>>>>> Stashed changes

class LessonController extends Controller
{
    /**
     * @Route("/lesson", name="lesson")
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
        $repo = $em->getRepository('AppBundle:Lesson');
        // 3. findAll()
        $lessons = $repo->findAll();

        return $this->render('lesson/lessons.html.twig', [
<<<<<<< Updated upstream
            'lessons' => $lessons,
=======
            'lessons'=> $lessons,
>>>>>>> Stashed changes
        ]);
    }

    /**
     * @Route("/lesson/create", name="lesson_create")
<<<<<<< Updated upstream
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction()
    {
        $lesson = new Lesson();
        $form   = $this->createForm(new LessonType(), $lesson);
=======
     */
    public function createAction(Request $request)
    {
        $lesson = new Lesson();
        $form = $this->createForm(new LessonType(), $lesson);

        $form->add('submit','submit', [
            'label'=> 'create',
        ]);
        $form->handleRequest($request);

        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($lesson);
            $em->flush();

            return $this->redirectToRoute('lesson');
        }

        $user = $this->getUser();
>>>>>>> Stashed changes

        return $this->render('lesson/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
<<<<<<< Updated upstream
}
=======

    /**
     * @Route("/lesson/{id}/edit",name="lesson_edit")
     */
    public function updateAction(Request $request, $id)
    {
        $lesson = $this->getDoctrine()->getManager()->getRepository('AppBundle:Lesson')->find($id);

        if (null === $lesson)
            throw $this->createNotFoundException(sprintf(
                'Lesson n%d found.',
                $id
            ));

        $form = $this->createForm(new LessonType(), $lesson);
        $form->add('submit','submit', [
            'label'=> 'update',
        ]);
        $form->handleRequest($request);
        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('lesson');
        }

        return $this->render('lesson/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }


}
>>>>>>> Stashed changes
