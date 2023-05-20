<?php namespace App\MyLanguageApi\Classes;


class Language
{
    private $id;
    private $hl_id;
    private $name;
    private $ethnic_name;
    private $requests;
    private $jfilm;
    private $fish;
    private $melbourne;
    private $chinese;
    private $drupal;
    private $google;
    private $language_iso;
    private $language_bing;
    private $mylanguage;
    private $font;
    private $direction;
    private $language_browser;
    private $bible_brain;
    private $checked_bible_brain;
    private $jfilm_date;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getHlId(): string
    {
        return $this->hl_id;
    }

    public function setHlId(string $hl_id): void
    {
        $this->hl_id = $hl_id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEthnicName(): ?string
    {
        return $this->ethnic_name;
    }

    public function setEthnicName(?string $ethnic_name): void
    {
        $this->ethnic_name = $ethnic_name;
    }

    public function getRequests(): int
    {
        return $this->requests;
    }

    public function setRequests(int $requests): void
    {
        $this->requests = $requests;
    }

    public function getJfilm(): ?string
    {
        return $this->jfilm;
    }

    public function setJfilm(?string $jfilm): void
    {
        $this->jfilm = $jfilm;
    }

    public function getFish(): string
    {
        return $this->fish;
    }

    public function setFish(string $fish): void
    {
        $this->fish = $fish;
    }

    public function getMelbourne(): ?string
    {
        return $this->melbourne;
    }

    public function setMelbourne(?string $melbourne): void
    {
        $this->melbourne = $melbourne;
    }

    public function getChinese(): ?string
    {
        return $this->chinese;
    }

    public function setChinese(?string $chinese): void
    {
        $this->chinese = $chinese;
    }

    public function getDrupal(): ?string
    {
        return $this->drupal;
    }

    public function setDrupal(?string $drupal): void
    {
        $this->drupal = $drupal;
    }

    public function getGoogle(): ?string
    {
        return $this->google;
    }

    public function setGoogle(?string $google): void
    {
        $this->google = $google;
    }

    public function getLanguageIso(): ?string
    {
        return $this->language_iso;
    }

    public function setLanguageIso(?string $language_iso): void
    {
        $this->language_iso = $language_iso;
    }

    public function getLanguageBing(): ?string
    {
        return $this->language_bing;
    }

    public function setLanguageBing(?string $language_bing): void
    {
        $this->language_bing = $language_bing;
    }

    public function getMyLanguage(): string
    {
        return $this->mylanguage;
    }

    public function setMyLanguage(string $mylanguage): void
    {
        $this->mylanguage = $mylanguage;
    }

    public function getFont(): string
    {
        return $this->font;
    }

    public function setFont(string $font): void
    {
        $this->font = $font;
    }

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setDirection(?string $direction): void
    {
        $this->direction = $direction;
    }

    public function getLanguageBrowser(): ?string
    {
        return $this->language_browser;
    }

    public function setLanguageBrowser(?string $language_browser): void
    {
        $this->language_browser = $language_browser;
    }

    public function getBibleBrain(): ?int
    {
        return $this->bible_brain;
    }

    public function setBibleBrain(?int $bible_brain): void
    {
        $this->bible_brain = $bible_brain;
    }

    public function getCheckedBibleBrain(): ?int
    {
        return $this->checked_bible_brain;
    }

    public function setCheckedBibleBrain(?int $checked_bible_brain): void
    {
        $this->checked_bible_brain = $checked_bible_brain;
    }

    public function getJfilmDate(): ?int
    {
        return $this->jfilm_date;
    }

    public function setJfilmDate(?int $jfilm_date): void
    {
        $this->jfilm_date = $jfilm_date;
    }


    // Properties and getter/setter methods...

    public function createRecord(
        int $id,
        string $hl_id,
        string $name,
        ?string $ethnic_name,
        int $requests,
        ?string $jfilm,
        string $fish,
        ?string $melbourne,
        ?string $chinese,
        ?string $drupal,
        ?string $google,
        ?string $language_iso,
        ?string $language_bing,
        string $mylanguage,
        string $font,
        ?string $direction,
        ?string $language_browser,
        ?int $bible_brain,
        ?int $checked_bible_brain,
        ?int $jfilm_date
    ): self {
        $language = new self();
        $language->setId($id);
        $language->setHlId($hl_id);
        $language->setName($name);
        $language->setEthnicName($ethnic_name);
        $language->setRequests($requests);
        $language->setJfilm($jfilm);
        $language->setFish($fish);
        $language->setMelbourne($melbourne);
        $language->setChinese($chinese);
        $language->setDrupal($drupal);
        $language->setGoogle($google);
        $language->setLanguageIso($language_iso);
        $language->setLanguageBing($language_bing);
        $language->setMyLanguage($mylanguage);
        $language->setFont($font);
        $language->setDirection($direction);
        $language->setLanguageBrowser($language_browser);
        $language->setBibleBrain($bible_brain);
        $language->setCheckedBibleBrain($checked_bible_brain);
        $language->setJfilmDate($jfilm_date);

        return $language;
    }

}
