<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

use \Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity(repositoryClass="UserRepository")
 * @Table(name="user")
 */
class User
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
    protected $name;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Bug", mappedBy="reporter")
     */
    protected $reportedBugs;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="Bug", mappedBy="engineer")
     */
    protected $assignedBugs;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reportedBugs = new ArrayCollection();
        $this->assignedBugs = new ArrayCollection();
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
     * @return User
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
     * Add reportedBugs
     *
     * @param \Bug $reportedBugs
     * @return User
     */
    public function addReportedBug(\Bug $reportedBugs)
    {
        $this->reportedBugs[] = $reportedBugs;

        return $this;
    }

    /**
     * Remove reportedBugs
     *
     * @param \Bug $reportedBugs
     */
    public function removeReportedBug(\Bug $reportedBugs)
    {
        $this->reportedBugs->removeElement($reportedBugs);
    }

    /**
     * Get reportedBugs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReportedBugs()
    {
        return $this->reportedBugs;
    }

    /**
     * Add assignedBugs
     *
     * @param \Bug $assignedBugs
     * @return User
     */
    public function addAssignedBug(\Bug $assignedBugs)
    {
        $this->assignedBugs[] = $assignedBugs;

        return $this;
    }

    /**
     * Remove assignedBugs
     *
     * @param \Bug $assignedBugs
     */
    public function removeAssignedBug(\Bug $assignedBugs)
    {
        $this->assignedBugs->removeElement($assignedBugs);
    }

    /**
     * Get assignedBugs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssignedBugs()
    {
        return $this->assignedBugs;
    }
}
