export class Preload extends Phaser.Scene{
	constructor(){
		super({ key: 'preload' });
	}
	preload(){
		this.load.image('preload', 'images/background-preload.png');
		this.load.spritesheet('playbutton', 'images/playbutton.png',{
			frameWidth: 190,
			frameHeight: 49
		});
	}
	create(){
		this.add.image(400, 250, 'preload');
		
		this.playButton = this.add.sprite(400, 400, 'playbutton').setInteractive();

		this.playButton.on('pointerover', () =>{
			this.playButton.setFrame(1);
		});
		this.playButton.on('pointerout', () =>{
			this.playButton.setFrame(0);
		});
		this.playButton.on('pointerdown', () =>{
			this.scene.start('game');
		});
	}
}