export class Controls{
	constructor(scene){
		this.relatedScene = scene;
	}
	preload(){
		this.relatedScene.load.image('left', 'images/left.png');
		this.relatedScene.load.image('right', 'images/right.png');
		this.relatedScene.load.image('launchbutton', 'images/launchbutton.png');
	}
	create(){
		this.buttonLeft = this.relatedScene.add.image(50, 400, 'left').setInteractive();
		this.buttonRight = this.relatedScene.add.image(750, 400, 'right').setInteractive();
		this.buttonLaunch = this.relatedScene.add.image(400, 450, 'launchbutton').setInteractive();

		this.buttonLeft.on('pointerdown', () =>{
			this.relatedScene.cursors.left.isDown = true;
		}).on('pointerup', () =>{
			this.relatedScene.cursors.left.isDown = false;
		});

		this.buttonRight.on('pointerdown', () =>{
			this.relatedScene.cursors.right.isDown = true;
		}).on('pointerup', () =>{
			this.relatedScene.cursors.right.isDown = false;
		})

		this.buttonLaunch.on('pointerdown', () =>{
			this.relatedScene.cursors.up.isDown = true;
		})
	}
}