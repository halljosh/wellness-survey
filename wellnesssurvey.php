<!DOCTYPE html>
<html>

<head>
    <title>Wellness Survey</title>
    <link href="survey.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel=icon href="https://static-s.aa-cdn.net/img/gp/20600003558822/c8WzwLsZKo0BG1tKmUSNWgz5KE8JgldMoDT3WnyDWlXxNDaYOwCC2q4z7Pt8hO3QxhI_=s300?v=1" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php if (isset($_POST['form_submitted'])): ?>
    <h1 id="title">Thank you, <?php echo $_POST['name']; ?>!</h1>
    <p style= "text-align: center;" id="description">Your responses have been submitted to the All-Seeing Spirit.</p>
    <?php else:?>
    <header>
        <h1 id="title">A Brief Wellness Survey</h1>
        <p style="text-align: center;" id="description">We're sorry to hear you aren't feeling well. You'll feel better if you take this survey.</p>
    </header>
    <form id="survey-form" action="wellnesssurvey.php" method="post">
        <div class="form-group">
            <label id="name-label" for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Input your name or alias" required />
        </div>
        <div class="form-group">
            <label id="email-label" for="for">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Input a phony email address" required />
        </div>
        <div class="form-group">
            <label id="number-label" for="for">Number</label>
            <input type="number" name="numbers" id="number" min="-100000000" max="100000000000000" class="form-control" placeholder="Input your favorite number" required />
        </div>
        <div class="form-group">
            <label id="animal-label" for="for">Which animal best describes your current mood?</label>
            <select id="dropdown" name="animal" class="dropdown" required>
                <option disabled selected value>Pick one, quickly!</option>
                <option value="badger">Badger</option>
                <option value="hamster">Hamster</option>
                <option value="serpent">Serpent</option>
                <option value="wraith">Wraith</option>
                <option value="falcon">Falcon</option>
                <option value="housecat">House Cat</option>
                <option value="monitorlizard">Monitor Lizard</option>
            </select>
        </div>
        <div class="form-group">
            <h4 id="bloodtype" for="for">How is your blood feeling today?</h4>
            <label class="radiolabel"><input name="bloodtype" value="chilled" type="radio" class="radiolabel" checked />Chilled</label>
            <label class="radiolabel"><input name="bloodtype" value="scattered" type="radio" class="radiolabel" />Scattered</label>
            <label class="radiolabel"><input name="bloodtype" value="vaporous" type="radio" class="radiolabel" />Vaporous</label>
            <label class="radiolabel"><input name="bloodtype" value="scattered" type="radio" class="radiolabel" />Fluid</label>
            <label class="radiolabel"><input name="bloodtype" value="all" type="radio" class="radiolabel" />All of the Above</label>
        </div>
        <br>
        <div class="form-group">
            <label id="feeling-label" for="for">How does your mother make you feel?</label>
            <input type="text" name="feeling" id="name" class="form-control" placeholder="Input a complicated emotion" required />
        </div>
        <div class="form-group">
            <h4>
                What food(s) are you currently craving?
                <span class="clue">(Check all that apply)</span>
            </h4>
            <label><input name="prefer" value="Burger" type="checkbox" class="input-checkbox" />Burger</label>
            <label><input name="prefer" value="gruel" type="checkbox" class="input-checkbox" />Gruel</label>
            <label><input name="prefer" value="pasta" type="checkbox" class="input-checkbox" />Pasta</label>
            <label><input name="prefer" value="curry" type="checkbox" class="input-checkbox" />Curry</label>
            <label><input name="prefer" value="lettuce" type="checkbox" class="input-checkbox" />Raw Lettuce</label>
            <label><input name="prefer" value="desserts" type="checkbox" class="input-checkbox" />Processed Desserts</label>
            <label><input name="prefer" value="bananapeel" type="checkbox" class="input-checkbox" />Banana Peel</label>
            <label><input name="prefer" value="kangaroo" type="checkbox" class="input-checkbox" />Kangaroo Steak</label>
            <label><input name="prefer" value="espresso" type="checkbox" class="input-checkbox" />Espresso Beans</label>
            <label><input name="prefer" value="rice" type="checkbox" class="input-checkbox" />Rice</label>
            <label><input name="prefer" value="radish" type="checkbox" class="input-checkbox" />Pickled Radish</label>
        </div>
        <div class="form-group">
            <h4>In your view, how could the texture of your skin be improved?</h4>
            <textarea id="comments" class="input-textarea" name="comment" placeholder="Input no more than 500 characters and no less than 27." minlength="27" maxlength="500"></textarea>
        </div>
        <input type="hidden" name="form_submitted" value="1" />
		<div class="form-group">
			<button type="submit" id="submit" class="submit-button">Submit!</button>
		</div>
		<h3 style="text-align: center;">By submitting this form, you assent to transmission of your healing wishes to the All-Seeing Spirit. Remember that this is for your own good.</h3>
    </form>
    <?php endif; ?>
</body>

</html>