<?php

class Application
{
    private VideoStore $store;

    public function __construct()
    {
        $this->store = new VideoStore();
    }

    public function run(): void
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!" . PHP_EOL;
                    die;
                case 1:
                    $this->addMovies();
                    break;
                case 2:
                    $this->rentVideo();
                    break;
                case 3:
                    $this->returnVideo();
                    break;
                case 4:
                    $this->listInventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function addMovies(): void
    {
        $title = readline("Enter title: ");
        $ratings = explode(" ", readline("Enter ratings: "));
        $video = new Video($title, true, $ratings);
        $this->store->add($video);
    }

    private function rentVideo(): void
    {
        $title = readline("Enter title: ");
        $video = $this->store->search($title);

        if ($video == null || $video->getAvailability() === false) {
            echo "Video not found." . PHP_EOL;
            return;
        }
        $video->setAvailability(false);
    }

    private function returnVideo(): void
    {
        $title = readline("Enter title: ");
        $video = $this->store->search($title);

        if ($video == null || $video->getAvailability() === true) {
            echo "Video not found." . PHP_EOL;
            return;
        }
        $rating = (int)readline("Enter rating: ");

        $video->setAvailability(true);
        $video->addRating($rating);

    }

    private function listInventory(): void
    {
        foreach ($this->store->getVideos() as $video) {
            /** @var Video $video */
            $available = $video->getAvailability() ? "Yes" : "No";
            echo "[] {$video->getTitle()} - {$video->getAverageRating()} - {$available}";
        }
    }

}

class VideoStore
{
    private array $videos = [];

    public function add(Video $video): void
    {
        $this->videos[] = $video;
    }

    public function getVideos(): array
    {
        return $this->videos;
    }

    public function search(string $title): ?Video
    {
        foreach ($this->getVideos() as $video)
        {
            if ($video->getTitle() === $title)
            {
                return $video;
            }
        }
        return null;
    }
}


class Video
{
    private string $title;
    private bool $available;
    private array $ratings;

    public function __construct(string $title, bool $available = true, array $ratings = [])
    {
        $this->title = $title;
        $this->available = $available;
        $this->ratings = $ratings;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function addRating(int $rating): void
    {
        $this->ratings[] = $rating;
    }

    public function getAvailability(): bool
    {
        return $this->available;
    }

    public function setAvailability(bool $availability): void
    {
        $this->available = $availability;
    }

    public function getAverageRating(): float
    {
        if (count($this->ratings) <= 0) return 0;
        return array_sum($this->ratings) / count($this->ratings);
    }
}

$application = new Application();
$application->run();
