export class Scoreboard{
	constructor(scene){
		this.relatedScene = scene;
		this.score = 0;
	}

	create(){
		this.scoreText = this.relatedScene.add.text(16, 16, 'SCORE: 0', {
			fontSize: '20px',
			fill: '#fff',
			fontFamily: 'Verdana, Arial, sans-serif'
		});
	}
	incrementPoint(points){
		this.score += points;
		this.scoreText.setText('SCORE: ' + this.score);

		if (this.score / 100 >= 1) {
			console.log("MAS");
		}
	}
}