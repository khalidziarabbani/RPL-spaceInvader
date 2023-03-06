<style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
        }
        canvas {
            border: 10px solid red;
            
        }
</style>

<div style="position: relative;">
    <p style="position: absolute; z-index: 10; color: white; 
            margin: 0; margin-left: 10px; margin-top: 10px; 
                font-family: sans-serif; font-size: 14px;">
        <span> Score: </span> <span id="scoreElement">0</span>
    </p>
    <canvas id="canvas"></canvas>
</div>

<script src="index.js"></script>