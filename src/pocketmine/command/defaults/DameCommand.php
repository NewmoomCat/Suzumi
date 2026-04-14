<?php

namespace pocketmine\command\defaults;

use pocketmine\command\CommandSender;
use pocketmine\event\TranslationContainer;

class DameCommand extends VanillaCommand
{
	public function __construct($name)
	{
		parent::__construct(
			$name,
			"桐生一马",
			"/dame"
			);
	}

	public function execute(CommandSender $sender, $commandLabel, array $args)
	{
		$sender->sendMessage("だめだね だめよ だめなのよ");
		$sender->sendMessage("あんだな 好きで 好き好きで");
		$sender->sendMessage("どれだけ 強いを酒でも");
		$sender->sendMessage("歪まない思い出が ばかみたい");
		return true;
	}
}