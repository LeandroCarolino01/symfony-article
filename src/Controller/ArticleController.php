<?php
    namespace App\Controller;

    use App\Entity\Article;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class ArticleController extends Controller {
        /**
         * @Route("/")
         * @Method({"GET"})
         */
        public function index() {
            //return new Response('<html><body>hello</body></html>');
            $articles = ['article 1', 'article 2'];
            return $this->render('articles/index.html.twig', array('articles'=>$articles));
        }

        /**
         * @Route("/article/save")
         */

         public function save() {
             $entityManager = $this->getDoctrine()->getManager();

             $article = new Article();
             $article->setTitle('article two');
             $article->setBody('This is the body for the article two');

             $entityManager->persist($article);

             $entityManager->flush();

             return new Response('Saves an article with the id of '.$article->getId());
         }
    }