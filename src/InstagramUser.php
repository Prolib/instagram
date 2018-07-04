<?php declare(strict_types = 1);

namespace ProLib\Instagram;

class InstagramUser {

	/** @var int */
	private $followerCount;

	public function __construct(array $data) {
		$this->followerCount = (int) $data['follower_count'];
	}

	/**
	 * @return int
	 */
	public function getFollowerCount(): int {
		return $this->followerCount;
	}

}
