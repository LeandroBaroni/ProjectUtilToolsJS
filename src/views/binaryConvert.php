<main id="content" class="content">
    <?php
    renderTitle(
        'Convert Text to Binary',
        'Enter Text:',
        'icofont-binary'
    );
    ?>
    <div id="divText" class="divText">
        <form action="#" method="post" class="inputs" id="formText">
            <div class="inputs">
                <textarea id="txtText" name="txtText" rows="5" cols="50" class="txtText"></textarea>
            </div>
            <div class="inputs">
                <textarea id="txtResult" name="txtResult" rows="5" cols="50" class="txtResult"></textarea>
            </div>
            <div class="buttonState">
                <button id="button_send" class="binaryButton" type="submit">To Binary</button>
            </div>
        </form>
    </div>
</main>
<script type="text/javascript" src="assets/js/appConvertToBinary.js"></script>