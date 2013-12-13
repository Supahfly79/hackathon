<?PHP
/*
 CODING CHALLENGE
PREREQUISITES:
* CODE MUST BE WRITTEN IN UPPERCASE LETTERS
 * AS LESS CHARACTERS AS POSSIBLE
 * INSULT AS COMMAND LINE OUTPUT
 * NO PARAMETERS ALLOWED
 */
ECHO "YOU ARE A\n";
G("A.TXT");
FUNCTION G($F, $I = ""){
    $C = 1;

    $R = MT_RAND(1, COUNT(FILE($F)));

    FOREACH (EXPLODE("\n", STRTOUPPER(FILE_GET_CONTENTS($F))) AS $A) {
        IF ($C == $R) {
            PRINT $A . "\n";
            IF ($F === "A.TXT") {
                G("B.TXT", $I);
            }
            RETURN;
        }
        $C++;
    }
}