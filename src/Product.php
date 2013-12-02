<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

use \Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Product
 *
 * @Entity(repositoryClass="ProductRepository")
 * @Table(name="product")
 */
class Product
{
    /**
     * @var int
     *
     * @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @ManyToMany(targetEntity="Bug")
     */
    protected $bugs;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bugs = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add bugs
     *
     * @param \Bug $bugs
     * @return Product
     */
    public function addBug(\Bug $bugs)
    {
        $this->bugs[] = $bugs;

        return $this;
    }

    /**
     * Remove bugs
     *
     * @param \Bug $bugs
     */
    public function removeBug(\Bug $bugs)
    {
        $this->bugs->removeElement($bugs);
    }

    /**
     * Get bugs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBugs()
    {
        return $this->bugs;
    }
}
