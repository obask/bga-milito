<?php

/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * Milito implementation : © <Your name here> <Your email address here>
 *
 * This code has been produced on the BGA studio platform for use on https://boardgamearena.com.
 * See http://en.doc.boardgamearena.com/Studio for more information.
 * -----
 *
 * milito.action.php
 *
 * Milito main action entry point
 *
 *
 * In this file, you are describing all the methods that can be called from your
 * user interface logic (javascript).
 *
 * If you define a method "myAction" here, then you can call it from your javascript code with:
 * this.ajaxcall( "/milito/milito/myAction.html", ...)
 *
 */
class action_milito extends APP_GameAction
{

    // Constructor: please do not modify
    public function __default()
    {
        if (self::isArg('notifwindow')) {
            $this->view = "common_notifwindow";
            $this->viewArgs ['table'] = self::getArg("table", AT_posint, true);
        } else {
            $this->view = "heartsla_heartsla";
            self::trace("Complete reinitialization of board game");
        }
    }

    public function playCard()
    {
        self::setAjaxMode();
        $card_id = self::getArg("id", AT_posint, true);
        $this->game->playCard($card_id);
        self::ajaxResponse();
    }
}
  

