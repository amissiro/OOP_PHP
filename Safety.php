<?php

/**
 * The safety indicator.
 */
interface Safety
{
	/**
	 * Gets the safety rating.
	 *
	 * @return integer
	 */
	public function getSafetyRating();
}