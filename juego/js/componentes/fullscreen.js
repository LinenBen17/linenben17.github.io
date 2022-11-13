export class FullScreen {
	constructor(scene){
		this.relatedScene = scene;
	}
	preload(){
		this.relatedScene.load.image('fullscreen', 'images/fullscreen.png')
	}
	create(){
		this.fullScreen = this.relatedScene.add.image(770, 30, 'fullscreen').setInteractive();
		this.fullScreen.setScale(.04)

		this.fullScreen.on('pointerup', () =>{
		    if (this.relatedScene.scale.isFullscreen) {
		    	this.relatedScene.scale.stopFullscreen();
		    }else{
		    	this.relatedScene.scale.startFullscreen();
		    }
		});
	}
}