<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Property\Fatness;
use AppBundle\Entity\Property\Volume;
use AppBundle\Entity\Shop;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\PropertyClass;
use AppBundle\Entity\Product;
use AppBundle\Entity\ProductShopInfo;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $product = new Product();
        $productShopInfo = new ProductShopInfo();
        $fatness = new Fatness('2.5');
        $volume = new Volume('900');
        $category = $em->getRepository('AppBundle:Category')->findOneBy(['name' => 'milk']);
        $brand = $em->getRepository('AppBundle:Brand')->findOneBy(['title' => 'Lactel']);
        $shop = $em->getRepository('AppBundle:Shop')->findOneBy(['name' => 'Копейка']);

        $product->setTitle('Молоко Лактель 900гр 2.5% вітамін Д т.ф');
        $product->setCategory($category);
        $product->setBrand($brand);
        $product->addProperty($fatness);
        $product->addProperty($volume);

        $productShopInfo->setLink('https://kopeyka.od.ua/molochnaya-produktsiya/moloko/moloko/moloko-laktel-900gr-2-5-vitamin-d-t-f');
        $productShopInfo->setPrice(2455);
        $productShopInfo->setProduct($product);
        $productShopInfo->setShop($shop);

        //$em->persist($productShopInfo);
        //$em->persist($product);
        //$em->flush();
        dump($product);
        return $this->render('base.html.twig');
    }
}
