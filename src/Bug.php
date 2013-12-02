<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity(repositoryClass="BugRepository")
 * @Table(name="bug")
 */
class Bug
{
    /**
     * @var int
     *
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @Column(type="string", length=255)
     */
    protected $description;

    /**
     * @var \DateTime
     *
     * @Column(type="datetime")
     */
    protected $created;

    /**
     * @var string
     *
     * @Column(type="string")
     */
    protected $status;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @ManyToMany(targetEntity="Product")
     */
    protected $products;

    /**
     * @var User
     *
     * @ManyToOne(targetEntity="User", inversedBy="reportedBugs")
     */
    protected $reporter;

    /**
     * @var User
     *
     * @ManyToOne(targetEntity="User", inversedBy="assignedBugs")
     */
    protected $engineer;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @return Bug
     */
    public function close()
    {
        $this->status = "CLOSE";
        return $this;
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
     * Set description
     *
     * @param string $description
     * @return Bug
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Bug
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Bug
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Add products
     *
     * @param \Product $products
     * @return Bug
     */
    public function addProduct(\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \Product $products
     */
    public function removeProduct(\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set reporter
     *
     * @param \User $reporter
     * @return Bug
     */
    public function setReporter(\User $reporter = null)
    {
        $reporter->addReportedBug($this);
        $this->reporter = $reporter;

        return $this;
    }

    /**
     * Get reporter
     *
     * @return \User 
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * Set engineer
     *
     * @param \User $engineer
     * @return Bug
     */
    public function setEngineer(\User $engineer = null)
    {
        $engineer->addAssignedBug($this);
        $this->engineer = $engineer;

        return $this;
    }

    /**
     * Get engineer
     *
     * @return \User 
     */
    public function getEngineer()
    {
        return $this->engineer;
    }
}
