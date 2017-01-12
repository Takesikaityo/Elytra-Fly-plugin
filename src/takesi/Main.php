<?php

namespace takesi;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\utils\Config;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\math\Vector3;
use pocketmine\level\Position;

class Main extends PluginBase implements Listener{
    public function onEnable(){
        if (!file_exists($this->getDataFolder())) @mkdir($this->getDataFolder(), 0755, true);
        $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
        if (!$this->config->exists("block")) $this->config->set("block", 133);
        if (!$this->config->exists("move")) $this->config->set("move", 3);
        $this->config->save();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->users = [];
    }

    public function onMove(PlayerMoveEvent $event){
        $p = $event->getPlayer();
        $level = $p->getLevel();
        $block0 = $level->getBlock(new Vector3($p->getX(),$p->getY()-1,$p->getZ()));
        $block1 = $level->getBlock(new Vector3($p->getX(),$p->getY()-2,$p->getZ()));
        $block2 = $level->getBlock(new Vector3($p->getX(),$p->getY()-3,$p->getZ()));
        $block3 = $level->getBlock(new Vector3($p->getX(),$p->getY()-4,$p->getZ()));
        if($block0->getId() == $this->config->get("block")){
            $MotionA = new Vector3(0,0,0); //初期座標
            $dir=$p->getDirection(); //向いている方向を取得
            $move = $this->config->get("move"); //動かすブロック数
            if($dir === 0){$MotionA->x=$move;} //南
            if($dir === 1){$MotionA->z=$move;} //西
            if($dir === 2){$MotionA->x=-$move;} //北
            if($dir === 3){$MotionA->z=-$move;} //東
            $p->setMotion($MotionA); //実行
        }
        if($block1->getId() == $this->config->get("block")){
            $MotionA = new Vector3(0,0,0); //初期座標
            $dir=$p->getDirection(); //向いている方向を取得
            $move = $this->config->get("move"); //動かすブロック数
            if($dir === 0){$MotionA->x=$move;} //南
            if($dir === 1){$MotionA->z=$move;} //西
            if($dir === 2){$MotionA->x=-$move;} //北
            if($dir === 3){$MotionA->z=-$move;} //東
            $p->setMotion($MotionA); //実行
        }
        if($block2->getId() == $this->config->get("block")){
            $MotionA = new Vector3(0,0,0); //初期座標
            $dir=$p->getDirection(); //向いている方向を取得
            $move = $this->config->get("move"); //動かすブロック数
            if($dir === 0){$MotionA->x=$move;} //南
            if($dir === 1){$MotionA->z=$move;} //西
            if($dir === 2){$MotionA->x=-$move;} //北
            if($dir === 3){$MotionA->z=-$move;} //東
            $p->setMotion($MotionA); //実行
        }
        if($block3->getId() == $this->config->get("block")){
            $MotionA = new Vector3(0,0,0); //初期座標
            $dir=$p->getDirection(); //向いている方向を取得
            $move = $this->config->get("move"); //動かすブロック数
            if($dir === 0){$MotionA->x=$move;} //南
            if($dir === 1){$MotionA->z=$move;} //西
            if($dir === 2){$MotionA->x=-$move;} //北
            if($dir === 3){$MotionA->z=-$move;} //東
            $p->setMotion($MotionA); //実行
        }
            return true;
    }
}