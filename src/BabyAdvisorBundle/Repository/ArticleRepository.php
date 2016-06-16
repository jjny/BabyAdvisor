<?php
namespace BabyAdvisorBundle\Repository;
use Doctrine\ORM\EntityRepository;
/**
 * FolderRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{
	public function findTopArticle($nb)
    {
        $query = $this->createQueryBuilder('A')
			->select('A')
			->join('A.Notes', 'N')
			->addSelect('N')
			->orderBy('N.MoyGen');
        $query->setMaxResults($nb);
        return $query->getQuery()->getResult();
    }

    public function findLastArticles($nb)
    {
    	$query = $this->createQueryBuilder('A')
			->select('A')
			->orderBy('A.DateMaJ');
        $query->setMaxResults($nb);
        return $query->getQuery()->getResult();
    }

    public function findArticlesOrderBy($orderBy)
    {
    	$query = $this->createQueryBuilder('A')
    		->select('A')
    		->orderBy('A.'.$orderBy);
    	return $query->getQuery()->getResult();
    }

    /*public function filterResult($value='')
    {
    	# code...
    }*/
}