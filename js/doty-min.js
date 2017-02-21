var CONFIG={circleMinRadius:2,circleMaxRadius:24,circleSpacing:38,circleMinAlpha:.1,circleColor:"#2747D8",bgColor:"rgba(255,255,255,0.1)",waveSpeed:5,waveLength:160},App=function(){this.canvas=document.getElementById("canvas"),this.ctx=canvas.getContext("2d"),this.circles=[],this.waves=[]};App.prototype.init=function(){var i=this;this.canvas.width=window.innerWidth,this.canvas.height=window.innerHeight;for(var t=CONFIG.circleSpacing,a=CONFIG.circleSpacing;(a+=CONFIG.circleSpacing)+CONFIG.circleSpacing<this.canvas.height;)for(t=CONFIG.circleSpacing;(t+=CONFIG.circleSpacing)+CONFIG.circleSpacing<this.canvas.width;)this.circles.push(new Circle(this.ctx,t,a,CONFIG.circleMinRadius));this.canvas.addEventListener("click",function(t){i.startWave(t.offsetX,t.offsetY)}),this.update()},App.prototype.update=function(){var i=this;this.ctx.fillStyle=CONFIG.bgColor,this.ctx.fillRect(0,0,this.canvas.width,this.canvas.height);for(var t=this.circles.length;t--;)this.circles[t].update(this.waves);for(var a=this.waves.length;a--;)0==this.waves[a].affectedPoints&&this.waves.splice(a,1),this.waves[a].radius+=CONFIG.waveSpeed;requestAnimationFrame(function(){return i.update()})},App.prototype.startWave=function(i,t){this.waves.push({x:i,y:t,radius:0,affectedPoints:0})};var Circle=function(i,t,a,c){this.ctx=i,this.x=t,this.y=a,this.radius=c};Circle.prototype.update=function(i){for(var t=0,a=i.length;a--;){var c=Math.sqrt(Math.pow(this.x-i[a].x,2)+Math.pow(this.y-i[a].y,2)),e=Math.abs(c-i[a].radius),s=Math.max(1-e/CONFIG.waveLength,0);t+=s,s&&i[a].affectedPoints++}this.radius=Math.round(Math.max(CONFIG.circleMaxRadius*t,CONFIG.circleMinRadius)),this.ctx.fillStyle=CONFIG.circleColor,this.ctx.globalAlpha=CONFIG.circleMinAlpha+t*(1-CONFIG.circleMinAlpha),this.ctx.beginPath(),this.ctx.arc(this.x,this.y,this.radius,0,2*Math.PI),this.ctx.fill(),this.ctx.globalAlpha=1};var theApp=new App;theApp.init();