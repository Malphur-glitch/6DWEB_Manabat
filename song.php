<?php
$title = "Somebody That I Used To Know"; //String Variables
$artist = "Gotye";
$feat = "Kimbra";
$verseOne = 1; // Numeric Variables
$verseTwo = (1 + "1"); //Type juggling
$verseThree = (1 + "2"); 

$nounSomebody = "Somebody";

#ARRAYS OF NOUNS, VERBS, ADJECTIVES
#12 items
$nouns = ["time", "company", "love", "sadness", "resignation", "end", "friends", "records", "number", "way", "word", "somebody"];

#23 items
$verbs = ["think", "said", "felt", "told", "remember", "get", "found", "could", "make", "admitted", "cut", "Make out", "happened", "need", "treat", "stooped", "have", "collect", "change", "live", "read", "Let", "catch"];

# 7 items
$adjectives = ["happy", "right", "lonely", "certain", "rough", "old", "hung up"];

#ARRAYS OF VERSES AND CHORUS
#5 lines
$verse1 = [
    "Now and then, I " . $verbs[0] . " of when we were together", // think

    "Like when you " . $verbs[1] . " you " . $verbs[2] . " so " . $adjectives[0] . " you could die", // REFERENCED said, felt, happy from arrays

    "Told myself that you were " . $adjectives[1] . " for me", // right

    "But " . $verbs[2] . " so " . $adjectives[2] . " in your " . $nouns[1], // felt, lonely, company
    "But that was " . $nouns[2] . ", and it's an ache I still " . $verbs[4] // love, remember
];

#5 lines
$verse2 = [
    "You can " . $verbs[5] . " addicted to a " . $adjectives[3] . " kinda " . $nouns[3], // get, certain, sadness
    "Like " . $nouns[4] . " to the " . $nouns[5] . ", always the " . $nouns[5], // resignation, end
    "So when we " . $verbs[6] . " that we could not " . $verbs[8] . " sense", // found, make
    "Well, you " . $verbs[1] . " that we would still be " . $nouns[6], // said, friends
    "But I'll " . $verbs[9] . " that I was glad it was over" // admit
];

#8 lines
$chorus = [
    "But you didn't have to " . $verbs[10] . " me off", // cut
    $verbs[11] . " like it never " . $verbs[12] . " and that we were nothin'", // make out, happened
    "And I don't even " . $verbs[13] . " your " . $nouns[2], // need, love
    "But you " . $verbs[14] . " me like a stranger, and that feels so " . $adjectives[4], // treat, rough
    "No, you didn't have to " . $verbs[15] . " so low", // stoop
    "Have your " . $nouns[6] . " " . $verbs[17] . " your " . $nouns[7] . " and then " . $verbs[18] . " your " . $nouns[8], // friends, collect, records, change, number
    "Guess that I don't " . $verbs[13] . " that, though", // need
    "Now you're just " . $nouns[11] . " that I used to know" // somebody
];

#2 lines
$postChorus = 
[
"Now you're just $nouns[11] that I used to know",
"Now you're just $nouns[11] that I used to know"];

#6 lines
$verse3 = [
    "Now and then, I " . $verbs[0] . " of all the " . $nouns[0] . " you screwed me over", // think, time
    "But had me believin' it was always somethin' that I'd done",
    "But I don't wanna " . $verbs[20] . " that " . $nouns[9], // live, way
    $verbs[21] . " into every " . $nouns[10] . " you say", // read, word
    "You " . $verbs[1] . " that you " . $verbs[7] . " " . $verbs[22] . " it go", // said, could, let
    "And I wouldn't " . $verbs[22] . " you " . $adjectives[6] . " on " . $nouns[11] . " that you used to know" // catch, hung up, somebody
];

#7 lines
$outro = [
    $nounSomebody . " I used to know", // somebody
    $nounSomebody . " (now you're just " . $nouns[11] . " that I used to know)",
    $nounSomebody . " I used to know",
    $nounSomebody . " (now you're just " . $nouns[11] . " that I used to know)",
    "I used to know",
    "That I used to know",
    "I used to know " . $nouns[11] // somebody
];


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.00">
    <title>Somebody that I used to know</title>
    <style>
        html, body{
            height: 100%;
        }
        body { 
            font-family: 'Arial', sans-serif; 
            background: #f4f4f4; 
            padding: 2em; 
           
          
           
        }

        h1 {
            font-size: 2.5rem;
            color: #444;
            margin-bottom: 0.5rem;
            border-bottom: 2px solid #ccc;
            padding-bottom: 0.5rem;
        }

        h2 {
            font-size: 1.5rem;
            color: #666;
            margin-top: 0;
            margin-bottom: 1rem;
        }

        h3 {
            font-size: 1.2rem;
            color: #333;
            margin-top: 2rem;
            margin-bottom: 0.5rem;
        }

        div {
            margin-bottom: 2rem;
        }

        p {
            margin: 0.5rem 0;
            padding-left: 1rem;
            font-style: italic;
            border-left: 3px solid #eee;
        }

    </style>

</head>
<body>

<h1>Somebody That I Used To Know</h1>
<h2> by: <?= $artist ?> featuring <?= $feat ?></h2>

<!-- Displayed lyrics by referencing array and chorus indexes -->
<div>
<h3> Verse <?= $verseOne ?></h3>
<p> <?= $verse1[0] ?></p>
<p> <?= $verse1[1] ?></p>
<p> <?= $verse1[2] ?></p>
<p> <?= $verse1[3] ?></p>
<p> <?= $verse1[4] ?></p>
</div>

<div>
<h3> Verse <?= $verseTwo ?></h3>

<p> <?= $verse2[0] ?></p>
<p> <?= $verse2[1] ?></p>
<p> <?= $verse2[2] ?></p>
<p> <?= $verse2[3] ?></p>
<p> <?= $verse2[4] ?></p>
</div>

<div>
<h3>Chorus</h3>
<p> <?= $chorus[0] ?></p>
<p> <?= $chorus[1] ?></p>
<p> <?= $chorus[2] ?></p>
<p> <?= $chorus[3] ?></p>
<p> <?= $chorus[4] ?></p>
<p> <?= $chorus[5] ?></p>
<p> <?= $chorus[6] ?></p>
<p> <?= $chorus[7] ?></p>
</div>

<div>
<h3>Post-Chorus</h3>
<p> <?= $postChorus[0] ?></p>
<p> <?= $postChorus[1] ?></p>
</div>

<div>
<h3>Verse 3</h3>
<p> <?= $verse3[0] ?></p>
<p> <?= $verse3[1] ?></p>
<p> <?= $verse3[2] ?></p>
<p> <?= $verse3[3] ?></p>
<p> <?= $verse3[4] ?></p>
<p> <?= $verse3[5] ?></p>
</div>

<div>
<h3>Chorus</h3>
<p> <?= $chorus[0] ?></p>
<p> <?= $chorus[1] ?></p>
<p> <?= $chorus[2] ?></p>
<p> <?= $chorus[3] ?></p>
<p> <?= $chorus[4] ?></p>
<p> <?= $chorus[5] ?></p>
<p> <?= $chorus[6] ?></p>
<p> <?= $chorus[7] ?></p>
</div>

<div>
<h3>Post-Chorus</h3>
<p> <?= $postChorus[0] ?></p>
<p> <?= $postChorus[1] ?></p>
</div>

<div>
<h3>Outro</h3>
<p> <?= $outro[0] ?></p>
<p> <?= $outro[1] ?></p>
<p> <?= $outro[2] ?></p>
<p> <?= $outro[3] ?></p>
<p> <?= $outro[4] ?></p>
<p> <?= $outro[5] ?></p>
<p> <?= $outro[6] ?></p>
</div>

</body>
</html>



