<?php declare(strict_types = 1);

namespace ProLib\Instagram;

class InstagramTopSearch {

	private const URL = 'https://www.instagram.com/web/search/topsearch/?query=';

	/** @var array */
	private $result = [];

	public function __construct(string $search) {
		$this->result = json_decode(file_get_contents(self::URL . urlencode($search)), true);
	}

	public function getResult(): array {
		return $this->result;
	}

	public function getUsers(): array {
		return $this->result['users'];
	}

	public function getFirstUser(): ?InstagramUser {
		return isset($this->result['users'][0]['user']) ? new InstagramUser($this->result['users'][0]['user']) : null;
	}

	public function isOk(): bool {
		return isset($this->result['status']) && $this->result['status'] === 'ok';
	}

}
