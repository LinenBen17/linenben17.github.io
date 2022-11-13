import { Scoreboard } from '../componentes/Scoreboard.js';
import { Controls } from '../componentes/controls.js';
import { FullScreen } from '../componentes/fullscreen.js';

export class Game extends Phaser.Scene {

	constructor(){
		super({ key: 'game' });
	}
	init(){
		this.scoreboard = new Scoreboard(this);
		this.controls = new Controls(this);
		this.fullscreen = new FullScreen(this);
	}
	preload(){
		this.load.image('background', 'images/background.png');
		this.load.image('platform', 'images/platform.png');
		this.load.image('ball', 'images/ball.png');
		this.load.image('bluebrick', 'images/brickBlue.png');
		this.load.image('blackbrick', 'images/brickBlack.png');
		this.load.image('greenbrick', 'images/brickGreen.png');
		this.load.image('orangebrick', 'images/brickOrange.png');

		this.controls.preload();
		this.fullscreen.preload();
	}
	create(){
		this.physics.world.setBoundsCollision(true, true, true, false);

		this.add.image(400, 250, 'background');

		this.bricks = this.physics.add.staticGroup({
			key: ['bluebrick', 'orangebrick', 'greenbrick', 'blackbrick'],
			frameQuantity: 10,
			gridAlign:{
				width: 10,
				height: 4,
				cellWidth: 67,
				cellHeight: 34,
				x: 112,
				y: 100
			}
		});

		this.fullscreen.create();

		this.scoreboard.create();

		this.platform = this.physics.add.image(400, 460, 'platform').setImmovable();
		this.platform.body.allowGravity = false;
		this.platform.setCollideWorldBounds(true);

		this.ball = this.physics.add.image(385, 430, 'ball');
		this.ball.setData('glue', true);
		this.ball.setCollideWorldBounds(true);


		this.physics.add.collider(this.ball, this.platform, this.platformImpact, null, this);
		this.physics.add.collider(this.ball, this.bricks, this.brickImpact, null, this);

		this.ball.setBounce(1);
		
		this.controls.create();


		this.cursors = this.input.keyboard.createCursorKeys();
	}
	platformImpact(ball, platform){
		this.scoreboard.incrementPoint(1);

		let relativeImpact = ball.x - platform.x;
		console.log(ball.x, platform.x, relativeImpact);

		if (relativeImpact < 0.1 && relativeImpact > -0.1) {
			ball.setVelocityX(Phaser.Math.Between(-10, 10));
		}else{
			ball.setVelocityX(10 * relativeImpact);
		}
	}
	brickImpact(ball, brick){
		brick.disableBody(true, true);
		this.scoreboard.incrementPoint(10);

		if (this.bricks.countActive() === 0) {
			this.showCongratulations();
		}
	}
	update(){
		if (this.cursors.left.isDown) {
			this.platform.setVelocityX(-500);
			if (this.ball.getData('glue')) {
				this.ball.setVelocityX(-500);
			}
		}
		else if(this.cursors.right.isDown){
			this.platform.setVelocityX(500);
			if (this.ball.getData('glue')) {
				this.ball.setVelocityX(500);
			}
		}else{
			this.platform.setVelocityX(0);
			if (this.ball.getData('glue')) {
				this.ball.setVelocityX(0);
			}
		}

		if (this.ball.y > 500) {
			this.showGameOver();
		}

		if (this.cursors.up.isDown) {
			if (this.ball.getData('glue')) {
				this.ball.setVelocity(-60, -300);
				this.ball.setData('glue', false);
			}
		}
	}
	showGameOver(){
		this.scene.start('gameover');
	}
	showCongratulations(){
		this.scene.start('congratulations');
	}
}