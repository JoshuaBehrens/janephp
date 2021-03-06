<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi2\Model;

class FileSchema extends \ArrayObject
{
    /**
     * @var string
     */
    protected $format;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var mixed
     */
    protected $default;
    /**
     * @var string[]
     */
    protected $required;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var bool
     */
    protected $readOnly;
    /**
     * information about external documentation.
     *
     * @var ExternalDocs
     */
    protected $externalDocs;
    /**
     * @var mixed
     */
    protected $example;

    /**
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param string $format
     *
     * @return self
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param mixed $default
     *
     * @return self
     */
    public function setDefault($default): self
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRequired(): ?array
    {
        return $this->required;
    }

    /**
     * @param string[] $required
     *
     * @return self
     */
    public function setRequired(?array $required): self
    {
        $this->required = $required;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return bool
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly): self
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * information about external documentation.
     *
     * @return ExternalDocs
     */
    public function getExternalDocs(): ?ExternalDocs
    {
        return $this->externalDocs;
    }

    /**
     * information about external documentation.
     *
     * @param ExternalDocs $externalDocs
     *
     * @return self
     */
    public function setExternalDocs(?ExternalDocs $externalDocs): self
    {
        $this->externalDocs = $externalDocs;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * @param mixed $example
     *
     * @return self
     */
    public function setExample($example): self
    {
        $this->example = $example;

        return $this;
    }
}
