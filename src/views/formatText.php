<main id="content" class="content">
    <?php
        renderTitle(
            'Text Formatting',
            'This web page aims you with tasks where text formatting is needed.',
            'icofont-ui-text-chat'
        );
    ?>
    <div id="divText" class="divText">
        <form action="#" method="get" class="inputs" id="formText">
            <div class="inputs">
                <textarea id="txtText" name="txtText" rows="5" cols="50" class="txtText"></textarea>
            </div>
            <div class="inputs">
                <textarea id="txtResult" name="txtResult" rows="5" cols="50" class="txtResult"></textarea>
            </div>
            <div class="buttonState">
                <button id="formatButtonUpper" onClick="checkButtonClick(this.id)" class="formatButtonUpper" name="formatButtonUpper" value="formatButtonUpper" type="submit">To Upper</button>
            </div>
            <div class="buttonState">
                <button id="formatButtonLower" onClick="checkButtonClick(this.id)" class="formatButtonLower" name="formatButtonLower" value="formatButtonLower" type="submit">To Lower</button>
            </div>
            <div class="buttonState">
                <button id="formatButtonCapitalizeSentences" onClick="checkButtonClick(this.id)" class="formatButtonCapitalizeSentences" type="submit">Capitalize Sentences</button>
            </div>
            <div class="buttonState">
                <button id="formatButtonCapitalizeWords" onClick="checkButtonClick(this.id)" class="formatButtonCapitalizeWords" type="submit">Capitalize Words</button>
            </div>
        </form>
    </div>
</main>
<script type="text/javascript" src="assets/js/appFormatText.js"></script>