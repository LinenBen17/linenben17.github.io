import { Preload } from './scenes/preload.js';
import { Game } from './scenes/game.js';
import { Gameover } from './scenes/gameOver.js';
import { Congratulations } from './scenes/congratulations.js';

const config = {
	type: Phaser.AUTO,
	width: 800,
	height: 500,
	scene: [Preload, Game, Gameover, Congratulations],
	physics: {
		default: 'arcade',
		arcade:{
			debug: false
		}
	},
	scale:{
    	mode: Phaser.Scale.FIT,
    	autoCenter: Phaser.Scale.CENTER_BOTH
  	}
}

var game = new Phaser.Game(config);