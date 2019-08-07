<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 * @MongoDB\Document(collection="events")
 */
class Event
{
    /**
     * @var int $id event identifier
     * @MongoDB\Id(strategy="AUTO")
     *
     */
    private $id;

    /**
     * @var string $name event name
     * @Assert\NotBlank
     * @MongoDB\Field(type="string")
     */
    private $name;

    /**
     * @var date $startDate start date and time of the event
     * @Assert\NotNull
     * @MongoDB\Field(type="date")
     */
    private $startDate;

    /**
     * @var date $endDate end date and time of the event
     * @Assert\NotNull
     * @MongoDB\Field(type="date")
     */
    private $endDate;

    /**
     * @var string $description event description
     * @MongoDB\Field(type="string")
     */
    private $description;

    /**
     * @var string $url event URL
     * @Assert\Url
     * @MongoDB\Field(type="string")
     */
    private $url;

    /**
     * @var string $ethContractId contract ID generated by Etherium
     * @MongoDB\Field(type="string")
     */
    private $ethContractId;

    /**
     * @var float $ticketPrice event ticket price
     * @Assert\NotBlank
     * @MongoDB\Field(type="float")
     */
    private $ticketPrice;

    /**
     * @var int $ticketAmountOriginal original amount of event tickets
     * @Assert\NotBlank
     * @Assert\Type(
     *          type="integer",
     *          message="The value {{ value }} is not a valid {{ type }}"
     *     )
     * @MongoDB\Field(type="int")
     */
    private $ticketAmountOriginal;

    /**
     * @var int $ticketAmountCurrent current amount of available event tickets
     * @MongoDB\Field(type="int")
     */
    private $ticketAmountCurrent;

    /**
     * @var date $createdAt timestamp event creation
     * @MongoDB\Field(type="date")
     */
    private $createdAt;

    /**
     * @var date $updatedAt timestamp event update
     * @MongoDB\Field(type="date")
     */
    private $updatedAt;

    /**
     * @var int $category reference to category collection
     * @MongoDB\Field(type="integer")
     */
    private $category;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTicketPrice(): ?float
    {
        return $this->ticketPrice;
    }

    public function setTicketPrice(float $ticketPrice): self
    {
        $this->ticketPrice = $ticketPrice;

        return $this;
    }

    /**
     * @return int
     */
    public function getTicketAmountOriginal(): ?int
    {
        return $this->ticketAmountOriginal;
    }

    /**
     * @param int $ticketAmountOriginal
     */
    public function setTicketAmountOriginal(int $ticketAmountOriginal): void
    {
        $this->ticketAmountOriginal = $ticketAmountOriginal;
    }

    /**
     * @return int
     */
    public function getTicketAmountCurrent(): ?int
    {
        return $this->ticketAmountCurrent;
    }

    /**
     * @param int $ticketAmountCurrent
     */
    public function setTicketAmountCurrent(int $ticketAmountCurrent): void
    {
        $this->ticketAmountCurrent = $ticketAmountCurrent;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEthContractId(): ?string
    {
        return $this->ethContractId;
    }

    public function setEthContractId(string $ethContractId): self
    {
        $this->ethContractId = $ethContractId;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(int $category): self
    {
        $this->category = $category;

        return $this;
    }
}
