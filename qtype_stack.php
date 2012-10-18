<?php
// This file is part of Stack - http://stack.bham.ac.uk//
//
// Stack is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Stack is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Stack.  If not, see <http://www.gnu.org/licenses/>.


/**
 * Language strings for the Stack question type.
 *
 * @package    qtype_stack
 * @copyright  2012 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Translation by Michael Kallweit

$string['pluginname'] = 'STACK';
$string['pluginname_help'] = 'STACK ist ein Assessmentsystem für Mathematik.';
$string['pluginnameadding'] = 'STACK-Frage hinzufügen';
$string['pluginnameediting'] = 'STACK-Frage bearbeiten';
$string['pluginnamesummary'] = 'STACK ermöglicht es mathematische Fragestellungen in Moodle-Tests zu verwenden. Es verwendet ein Computeralgebrasystem um mathematische Eigenschaften der eingegebenen Antworten zu ermitteln und diese dann zu bewerten.';

// General strings.
$string['errors'] = 'Fehler';
$string['debuginfo'] = 'Debug Info';
$string['exceptionmessage'] = '{$a}';

// Strings used on the editing form.
$string['addanothernode'] = 'Weiteren Knoten hinzufügen';
$string['answernote'] = 'Antworthinweis';
$string['answernote_err'] = 'Antworthinweise dürfen nicht das Zeichen | enthalten. Dieses Zeichen wird von STACK später eingefügt, um die Antworthinweise automatisch zu trennen.';
$string['answernote_help'] = 'Dieses Tag dient zur Berichterstattung. Es bestimmt den eindeutigen Pfad durch den Baum und das Ergebnis jeder Antwort. Es wird automatisch erzeugt, kann aber auch manuell zu etwas Sinnvollem geändert werden.';
$string['answernote_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md#Answer_note';
$string['answernotedefaultfalse'] = '{$a->prtname}-{$a->nodename}-F';
$string['answernotedefaulttrue'] = '{$a->prtname}-{$a->nodename}-T';
$string['answernoterequired'] = 'Antworthinweis darf nicht leer sein.';
$string['assumepositive'] = 'Positivitätsannahme';
$string['assumepositive_help'] = 'Diese Option setzt Maxima\'s assume_pos Variable.';
$string['assumepositive_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#Assume_Positive';
$string['autosimplify'] = 'Auto-Vereinfachung';
$string['autosimplify_help'] = 'Setzt die Variable "simp" in Maxima für diesen potenziellen Rückmeldungsbaum.';
$string['autosimplify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Maxima.md#Simplification';
$string['boxsize'] = 'Größe der Eingabebox';
$string['boxsize_help'] = 'Breite der HTML-Eingabebox.';
$string['boxsize_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Box_Size';
$string['checkanswertype'] = 'Überprüfung der Antworttypen';
$string['checkanswertype_help'] = 'Falls ja, werden Antworten mit verschiedenen Typen (Term, Gleichung, Matrix, Liste, Menge), als ungültig verworfen.';
$string['checkanswertype_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Check_Type';
$string['complexno'] = 'Bedeutung und Anzeige von sqrt(-1)';
$string['complexno_help'] = 'Steuert die Bedeutung und Anzeige des Symbols i und sqrt(-1)';
$string['complexno_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#sqrt_minus_one.';
$string['defaultprtcorrectfeedback'] = 'Richtige Antwort, gut gemacht!';
$string['defaultprtincorrectfeedback'] = 'Falsche Antwort.';
$string['defaultprtpartiallycorrectfeedback'] = 'Ihre Antwort ist teilweise korrekt.';
$string['branchfeedback'] = 'Knotenzweig Feedback';
$string['branchfeedback_help'] = 'This is CASText which may depend on any of the question variables, input elements or the feedback variables. This is evaluated and displayed to the student if they pass down this branch.';
$string['inputtest'] ='Eingabetest';
$string['falsebranch'] = 'Falsch-Zweig';
$string['falsebranch_help'] = 'Diese Felder kontrollieren was passiert, wenn die Antwortüberprüfung negativ ausfällt
### Mod and score
Wie die Bepunktung angepasst wird. "=" setzt die Punkte auf einen bestimmten Wert. "+/-" addieren oder subtrahieren Punkte von der aktuellen Summe.

### Abzüge
Im adaptiven oder interaktiven Modus, ziehe so viele Punkte ab.

### Nächster
Soll zu einem nächsten Knoten gesprungen werden, falls ja zu welchen, ansonsten stoppe.

### Antworthinweis
Dieses Tag dient zur Berichterstattung. Es bestimmt den eindeutigen Pfad durch den Baum und das Ergebnis jeder Antwort. Es wird automatisch erzeugt, kann aber auch manuell zu etwas Sinnvollem geändert werden.
';
$string['feedbackvariables'] = 'Feedback Variablen';
$string['feedbackvariables_help'] = 'The feedback variables enable you to manipulate any of the inputs, together with the question variables, prior to traversing the tree.  Variables defined here may be used anywhere else in this tree.';
$string['feedbackvariables_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/KeyVals.md#Feedback_variables';
$string['fieldshouldnotcontainplaceholder'] = '{$a->field} sollten keine [[{$a->type}:...]] Platzhalter enthalten.';
$string['forbidfloat'] = 'Verbiete Fließkommazahlen';
$string['forbidfloat_help'] = 'Falls JA werden Antworten von Studierenden, die Fließkommazahlen enthalten als ungültig verworfen.';
$string['forbidfloat_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Forbid_Floats';
$string['forbidwords'] = 'Verbotene Wörter ';
$string['forbidwords_help'] = 'Dies ist eine Komma-separierte Liste von Zeichenketten, die in den Studierendenantworten verboten sind.';
$string['forbidwords_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#Forbidden_Words';
$string['generalfeedback'] = 'Allgemeines Feedback';
$string['generalfeedback_help'] = 'General feedback is CASText. General feedback, also known as a "worked solution", is shown to the student after they have attempted the question. Unlike feedback, which depends on what response the student gave, the same general feedback text is shown to all students.  It may depend on the question variables used in the version of the question.';
$string['generalfeedback_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#general_feedback';
$string['showvalidation'] = 'Show the validation';
$string['showvalidation_help'] = 'Setting this option displays any validation feedback from this input, including echoing back their expression in traditional two dimensional notation.';
$string['showvalidation_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Show_validation';
$string['htmlfragment'] = 'You appear to have some HTML elements in your expression.';
$string['illegalcaschars'] = 'The characters @ and \$ are not allowed in CAS input.';
$string['inputheading'] = 'Input: {$a}';
$string['inputtype'] = 'Input type';
$string['inputtype_help'] = 'This determines the type of the input element, e.g. form field, true/false, text area.';
$string['inputtype_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md';
$string['inputtypealgebraic'] = 'Algebraic input';
$string['inputtypeboolean'] = 'True/False';
$string['inputtypedropdown'] = 'Drop down list';
$string['inputtypesinglechar'] = 'Single character';
$string['inputtypetextarea'] = 'Text area';
$string['inputtypematrix'] = 'Matrix';
$string['insertstars'] = 'Insert stars';
$string['insertstars_help'] = 'If set to yes then the system will automatically insert *s into any patterns identified by Strict Syntax.  Otherwise, it shows an error.';
$string['insertstars_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Insert_Stars';
$string['multiplicationsign'] = 'Multiplication sign';
$string['multiplicationsign_help'] = 'Controls how multiplication signs are displayed.';
$string['multiplicationsign_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#multiplication';
$string['multcross'] = 'Cross';
$string['multdot'] = 'Dot';
$string['mustverify'] = 'Student must verify';
$string['mustverify_help'] = 'Specifies whether the student\'s input is presented back to them before scoring.';
$string['mustverify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Student_must_verify';
$string['next'] = 'Next';
$string['nextcannotbeself'] = 'A node cannot link to itself as the next node.';
$string['nodehelp'] = 'Response tree node';
$string['nodehelp_help'] = '### Answer test
An answer test is used to compare two expressions to establish whether they satisfy some mathematical criteria.

### SAns
This is the first argument to the answer test function.  In asymetrical tests this is considered to be the "student\'s answer" although it may be any valid CAS expression, and may depend on the question variables or the feedback variables.

### TAns
This is the second argument to the answer test function.  In asymetrical tests this is considered to be the "teacher\'s answer" although it may be any valid CAS expression, and may depend on the question variables or the feedback variables.

### Test options
This field enables answer tests to accept an option, e.g. a variable or a numerical precision.

### Quiet
When set to yes any feedback automatically generated by the answer tests is surpressed, and not displayed to the student.  The feedback fields in the branches are unaffected by this option.

';
$string['nodeloopdetected'] = 'A cycle was detected in this PRT.';
$string['nodenotused'] = 'No other nodes in the PRT link to this node.';
$string['nodex'] = 'Node {$a}';
$string['nodexdelete'] = 'Delete node {$a}';
$string['nodexfalsefeedback'] = 'Node {$a} false feedback';
$string['nodextruefeedback'] = 'Node {$a} true feedback';
$string['nodexwhenfalse'] = 'Node {$a} when false';
$string['nodexwhentrue'] = 'Node {$a} when true';
$string['nonempty'] = 'This must not be empty.';
$string['penalty'] = 'Penalty';
$string['penalty_help'] = 'The penalty scheme deducts this value from the result of each PRT for each different and valid attempt which is not completely correct.';
$string['penalty_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Feedback.md';
$string['penaltyerror'] = 'The penalty must be a numeric value between 0 and 1.';
$string['penaltyerror2'] = 'The penalty must empty, or be a numeric value between 0 and 1.';
$string['prtcorrectfeedback'] = 'Standard feedback for correct';
$string['prtheading'] = 'Potential response tree: {$a}';
$string['prtincorrectfeedback'] = 'Standard feedback for incorrect';
$string['prtpartiallycorrectfeedback'] = 'Standard feedback for partially correct';
$string['prtwillbecomeactivewhen'] = 'This potential response tree will become active when the student has answered: {$a}';
$string['questionnote'] = 'Question note';
$string['questionnote_help'] = 'The question note is CASText.  The purpose of a question note is to distinguish between random versions of a question. Two question versions are equal if and only if the question notes are equal.  In later analysis it is very helpful to leave a meaningful question note.';
$string['questionnote_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_note.md';
$string['questionnotempty'] = 'The question note cannot be empty when rand() appears in the question variables.  The question note is used to distinguish between different random versions of the question.';
$string['questionsimplify'] = 'Question-level simplify';
$string['questionsimplify_help'] = 'Sets the global variable "simp" within Maxima for the whole question.';
$string['questionsimplify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Maxima.md#Simplification';
$string['questiontext'] = 'Question text';
$string['questiontext_help'] = 'The question text is CASText.  This is the "question" which the student actually sees.  You must put input elements, and the validation strings, in this field, and only in this field.  For example, using `[[input:ans1]] [[validation:ans1]]`.';
$string['questiontext_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#question_text';
$string['questiontextmustcontain'] = 'The question text must contain the token \'{$a}\'.';
$string['questiontextmustcontain'] = 'The question text must contain the token \'{$a}\'.';
$string['questiontextnonempty'] = 'The question text must be non-empty.';
$string['questiontextonlycontain'] = 'The question text should only contain the token \'{$a}\' once.';
$string['questiontextfeedbackonlycontain'] = 'The question text combined with the specific feedback should only contain the token \'{$a}\' once.';
$string['questionvalue'] = 'Question value';
$string['questionvaluepostive'] = 'Question value must be positive';
$string['questionvariables'] = 'Question variables';
$string['questionvariables_help'] = 'This field allows you to define and manipulate CAS variables, e.g. to create random versions.  These are available to all other parts of the question.';
$string['questionvariables_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/KeyVals.md';
$string['quiet'] = 'Quiet';
$string['quiet_help'] = 'When set to yes any feedback automatically generated by the answer tests is surpressed, and not displayed to the student.  The feedback fields in the branches are unaffected by this option.';
$string['requiredfield'] = 'This field is required!';
$string['requirelowestterms'] = 'Require lowest terms';
$string['requirelowestterms_help'] = 'When this option is set to yes, any coefficients or other rational numbers in an expression, must be written in lowest terms.  Otherwise the answer is rejected as invalid.';
$string['requirelowestterms_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Require_lowest_terms';
$string['sans'] = 'SAns';
$string['sans_help'] = 'This is the first argument to the answer test function.  In asymetrical tests this is considered to be the "student\'s answer" although it may be any valid CAS expression, and may depend on the question variables or the feedback variables.';
$string['sans_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_tests.md';
$string['sansinvalid'] = 'SAns ist ungültig: {$a}';
$string['sansrequired'] = 'SAns darf nicht leer sein.';
$string['stop'] = '[stop]';
$string['score'] = 'Score';
$string['scoreerror'] = 'The score must be a numeric value between 0 and 1.';
$string['scoremode'] = 'Mod';
$string['specificfeedback'] = 'Specific feedback';
$string['specificfeedback_help'] = 'By default, feedback for each potential response tree will be shown in this block.  It can be moved to the question text, in which case Moodle will have less control over when it is displayed by various behaviours.  Note, this block is not CASText.';
$string['specificfeedbacktags'] = 'Specific feedback must not contain the token(s) \'{$a}\'.';
$string['sqrtsign'] = 'Surd for square root';
$string['sqrtsign_help'] = 'Controls how surds are displayed.';
$string['sqrtsign_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#surd';
$string['strictsyntax'] = 'Strict syntax';
$string['strictsyntax_help'] = 'Does the input have to be done using strict Maxima syntax?  If not, this increases the range of patterns which indicate missing *s on input, including any function application and scientific notation.';
$string['strictsyntax_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Strict_Syntax';
$string['strlengtherror'] = 'This string may not exceed 255 characters in length.';
$string['syntaxhint'] = 'Syntax hint';
$string['syntaxhint_help'] = 'The syntax hint will appear in the answer box whenever this is left blank by the student.';
$string['syntaxhint_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Syntax_Hint';
$string['tans'] = 'TAns';
$string['tans_help'] = 'This is the second argument to the answer test function.  In asymetrical tests this is considered to be the "teacher\'s answer" although it may be any valid CAS expression, and may depend on the question variables or the feedback variables.';
$string['tans_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_tests.md';
$string['tansinvalid'] = 'TAns is invalid: {$a}';
$string['tansrequired'] = 'TAns must not be empty.';
$string['teachersanswer'] = 'Model answer';
$string['teachersanswer_help'] = 'The teacher must specify a model answer for each input.  This must be a valid Maxima string, and may be formed from the question variables.';
$string['teachersanswer_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#model_answer';
$string['testoptions'] = 'Test options';
$string['testoptions_help'] = 'This field enables answer tests to accept an option, e.g. a variable or a numerical precision.';
$string['testoptions_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_tests.md';
$string['testoptionsinvalid'] = 'The test options are invalid: {$a}';
$string['testoptionsrequired'] = 'Test options are required for this test.';
$string['truebranch'] = 'True branch';
$string['truebranch_help'] = 'These fields control what happens when the answer test passes
### Mod and score
How the score is adjusted. = means set the score to a particular values, +/- means add or subtract the given score from the current total.

### Penalty
In adaptive or interactive mode, accumulate that much penalty.

### Next
Whether to go to another node, and if so which, or stop.

### Answer note
This is a tag which is key for reporting purposes.  It is designed to record the unique path through the tree, and the outcome of each answer test.  This is automatically generated, but can be changed to something meaningful.
';
$string['variantsselectionseed'] = 'Zufallsgruppe';
$string['variantsselectionseed_help'] = 'Normalerweise kann dies leer gelassen werden.
Normally you can leave this box blank. If, however, you want two different questions in a quiz to use the same random seed, then type the same string in this box for the two questions (and deploy the same set of random seeds, if you are using deployed versions) and the random seeds for the two questions will be synchronised.';
$string['verifyquestionandupdate'] = 'Verify the question text and update the form';

// Strings used by input elements.
$string['booleangotunrecognisedvalue'] = 'Ungültige Eingabe.';
$string['dropdowngotunrecognisedvalue'] = 'Ungültige Eingabe.';
$string['singlechargotmorethanone'] = 'Sie können hier nur ein Zeichen eingeben.';

// Admin settings.
$string['settingcasdebugging'] = 'CAS debugging';
$string['settingcasdebugging_desc'] = 'Whether to store debugging information about the CAS connection.';
$string['settingcasmaximaversion'] = 'Maxima version';
$string['settingcasmaximaversion_desc'] = 'The version of Maxima being used.';
$string['settingcasresultscache'] = 'CAS result caching';
$string['settingcasresultscache_db'] = 'Cache in the database';
$string['settingcasresultscache_desc'] = 'This setting determines whether calls the to CAS are cached. This setting should be turned on unless you are doing development that involves changing the Maxima code. The current state of the cache is shown on the healthcheck page.  If you change your settings, e.g. the gnuplot command, you will need to clear the cache before you can see the effects of these changes.';
$string['settingcasresultscache_none'] = 'Do not cache';
$string['settingcastimeout'] = 'CAS connection timeout';
$string['settingcastimeout_desc'] = 'The timout to use when trying to connect to Maxima.';
$string['settingplatformtype'] = 'Platform type';
$string['settingplatformtype_desc'] = 'Stack needs to know what sort of operating system it is running on. The Server and MaximaPool options give better performance at the cost of having to set up an additional server. The option "Linux (optimised)" is explained on the Optimising Maxima page in the documentation.';
$string['settingplatformtypeunix'] = 'Linux';
$string['settingplatformtypeunixoptimised'] = 'Linux (optimised)';
$string['settingplatformtypewin']  = 'Windows';
$string['settingplatformtypeserver'] = 'Server';
$string['settingplatformtypemaximapool'] = 'MaximaPool';
$string['settingplatformmaximacommand'] = 'Maxima command';
$string['settingplatformmaximacommand_desc'] = 'Stack needs to know the shell command to start Maxima.  If this is blank, Stack will make an educated guess.';
$string['settingplatformplotcommand'] = 'Plot command';
$string['settingplatformplotcommand_desc'] = 'Stack needs to know the gnuplot command.  If this is blank, Stack will make an educated guess.';

// Strings used by interaction elements.
$string['false'] = 'Falsch';
$string['notanswered'] = 'Nicht beantwortet.';
$string['true'] = 'Wahr';
$string['ddl_empty'] = 'No choices were provided for this drop-down. Please input a set of values link a,b,c,d';

// Strings used by the question test script.
$string['addanothertestcase'] = 'Add another test case...';
$string['addatestcase'] = 'Add a test case...';
$string['addingatestcase'] = 'Adding a test case to question {$a}';
$string['completetestcase'] = 'Fill in the rest of the form to make a passing test-case';
$string['createtestcase'] = 'Create test case';
$string['currentlyselectedvariant'] = 'This is the variant shown below';
$string['deletetestcase'] = 'Delete test case {$a->no} for question {$a->question}';
$string['deletetestcaseareyousure'] = 'Are you sure you want to delete test case {$a->no} for question {$a->question}?';
$string['deletethistestcase'] = 'Delete this test case...';
$string['deploy'] = 'Deploy';
$string['deployedvariantoptions'] = 'The following variants have been deployed:';
$string['deployedvariants'] = 'Deployed variants';
$string['editingtestcase'] = 'Editing test case {$a->no} for question {$a->question}';
$string['editthistestcase'] = 'Edit this test case...';
$string['expectedanswernote'] = 'Expected answer note';
$string['expectedoutcomes'] = 'Expected outcomes';
$string['expectedpenalty'] = 'Expected penalty';
$string['expectedscore'] = 'Expected score';
$string['inputdisplayed'] = 'Displayed as';
$string['inputentered'] = 'Value entered';
$string['inputexpression'] = 'Test input';
$string['inputname'] = 'Input name';
$string['inputstatus'] = 'Status';
$string['inputstatusname'] = 'Blank';
$string['inputstatusnameinvalid'] = 'Invalid';
$string['inputstatusnamevalid'] = 'Valid';
$string['inputstatusnamescore'] = 'Score';
$string['notestcasesyet'] = 'No test cases have been added yet.';
$string['penalty'] = 'Penalty';
$string['prtname'] = 'PRT name';
$string['questiondoesnotuserandomisation'] = 'This question does not use randomisation.';
$string['questionnotdeployedyet'] = 'No variants of this question have been deployed yet.';
$string['questionpreview'] = 'Question preview';
$string['questiontests'] = 'Question tests';
$string['runquestiontests'] = 'Run the question tests...';
$string['showingundeployedvariant'] = 'Showing undeployed variant: {$a}';
$string['alreadydeployed'] = ' A variant matching this Question note is already deployed.';
$string['switchtovariant'] = 'Switch to arbitrary variant';
$string['testcasexresult'] = 'Test case {$a->no} {$a->result}';
$string['testingquestion'] = 'Testing question {$a}';
$string['testinputs'] = 'Test inputs';
$string['testthisvariant'] = 'Switch to test this variant';
$string['undeploy'] = 'Un-deploy';

// Support scripts (CAS chat, healthcheck, etc.)
$string['all'] = 'All';
$string['chat'] = 'Send to the CAS';
$string['chat_desc'] = 'The <a href="{$a->link}">CAS chat script</a> lets you test the connection to the CAS, and try out Maxima syntax.';
$string['chatintro'] = 'This page enables CAS text to be evaluated directly. It is a simple script which is a useful minimal example, and a handy way to check if the CAS is working, and to test various inputs.';
$string['chattitle'] = 'Test the connection to the CAS';
$string['clearthecache'] = 'Clear the cache';
$string['healthcheck'] = 'STACK healthcheck';
$string['healthcheck_desc'] = 'The <a href="{$a->link}">healthcheck script</a> helps you verify that all aspects of Stack are working properly.';
$string['healthcheckcache_db'] = 'CAS results are being cached in the database.';
$string['healthcheckcache_none'] = 'CAS results are not being cached.';
$string['healthcheckcachestatus'] = 'The cache currently contains {$a} entries.';
$string['healthcheckconfig'] = 'Maxima configuration file';
$string['healthcheckconfigintro1'] = 'Found, and using, Maxima in the following directory:';
$string['healthcheckconfigintro2'] = 'Trying to automatically write the Maxima configuration file.';
$string['healthcheckconnect'] = 'Trying to connect to the CAS';
$string['healthcheckconnectintro'] = 'We are trying to evaluate the following CAS text:';
$string['healthchecklatex'] = 'Check LaTeX is being converted correctly';
$string['healthchecklatexintro'] = 'STACK generates LaTeX on the fly, and enables teachers to write LaTeX in questions. It assumes that LaTeX will be converted by a moodle filter.  Below are samples of displayed and inline expressions in LaTeX which should be appear correctly in your browser.  Problems here indicate incorrect moodle filter settings, not faults with STACK itself. Stack only uses the single and double dollar notation itself, but some question authors may be relying on the other forms.';
$string['healthchecklatexmathjax'] = 'One way to get equiation rendering to work is to copy the following code into the <b>Within HEAD</b> setting on <a href="{$a}">Additional HTML</a>.';
$string['healthcheckmaximabat'] = 'The maxima.bat file is missing';
$string['healthcheckmaximabatinfo'] = 'This script tried to automatically copy the maxima.bat script from inside "C:\Program files\Maxima-1.xx.y\bin" into "{$a}\stack". However, this seems not to have worked. Please copy this file manually.';
$string['healthcheckplots'] = 'Graph plotting';
$string['healthcheckplotsintro'] = 'There should be two different plots.  If two identical plots are seen then this is an error in naming the plot files. If no errors are returned, but a plot is not displayed then one of the following may help.  (i) check read permissions on the two temporary directories. (ii) change the options used by GNUPlot to create the plot. Currently there is no web interface to these options.';
$string['stackInstall_testsuite_title'] = 'A test suite for STACK Answer tests';
$string['stackInstall_testsuite_title_desc'] = 'The <a href="{$a->link}">answer-tests script</a> verifies that the answer tests are performing correctly. They are also useful to learn by example how each answer-test can be used.';
$string['stackInstall_testsuite_intro'] = 'This page allows you to test that the STACK answer tests are functioning correctly.  Note that only answer tests can be checked through the web interface.  Other Maxima commands need to be checked from the command line: see unittests.mac.';
$string['stackInstall_testsuite_choose'] = 'Please choose an answer test.';
$string['stackInstall_testsuite_pass'] = 'All tests passed!';
$string['stackInstall_testsuite_fail'] = 'Not all tests passed!';
$string['answertest'] = 'Answer test';
$string['answertest_help'] = 'An answer test is used to compare two expressions to establish whether they satisfy some mathematical criteria.';
$string['answertest_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_tests.md';
$string['testsuitecolpassed'] = 'Passed?';
$string['studentanswer'] = 'Student response';
$string['teacheranswer'] = 'Teacher answer';
$string['options'] = 'Optionen';
$string['testsuitefeedback'] = 'Feedback';
$string['testsuitecolerror'] = 'CAS Fehler';
$string['testsuitecolrawmark'] = 'Raw mark';
$string['testsuitecolexpectedscore'] = 'Expected mark';
$string['testsuitepass'] = 'Pass';
$string['testsuitefail'] = 'Fail';
$string['testsuitenotests']       = 'Number of tests: {$a->no}. ';
$string['testsuiteteststook']     = 'Tests took {$a->time} Sekunden. ';
$string['testsuiteteststookeach'] = 'Durchschnitt pro Test: {$a->time} Sekunden. ';
$string['stackInstall_input_title'] = "A test suite for validation of student's input";
$string['stackInstall_input_title_desc'] = 'The <a href="{$a->link}">input-tests script</a> provides test cases of how STACK interprests mathematical expressions.  They are also useful to learn by example.';
$string['stackInstall_input_intro'] = "This page allows you to test how STACK interprets various inputs from a student.  This currently only checks with the most liberal settings, trying to adopt an informal syntax and insert stars.  <br />'V' columns record validity as judged by PHP and the CAS.  V1 = PHP valid, V2 = CAS valid.";
$string['phpvalid'] = 'V1';
$string['phpcasstring'] = 'PHP Ausgabe';
$string['phpsuitecolerror'] = 'PHP Fehler';
$string['phpvalidatemismatch'] = '[PHP validate mismatch]';
$string['casvalidatemismatch'] = '[CAS validate mismatch]';
$string['casvalid'] = 'V2';
$string['casvalue'] = 'CAS Wert';
$string['casdisplay'] = 'CAS Anzeige';
$string['cassuitecolerrors'] = 'CAS Fehler';

$string['texdisplayedbracket'] = 'Displayed bracket';
$string['texinlinebracket'] = 'Inline bracket';
$string['texdoubledollar'] = 'Doppeltes Dollarzeichen';
$string['texsingledollar'] = 'Einfaches Dollarzeichen';

// Used in casstring.class.php.
$string['stackCas_spaces']                  = 'Leerzeichen gefunden im Ausdruck {$a->expr}.';
$string['stackCas_percent']                 = '&#037; gefunden im Ausdruck {$a->expr}.';
$string['stackCas_missingLeftBracket']      = 'Es fehlt eine linke Klammer <span class="stacksyntaxexample">{$a->bracket}</span> in dem Ausdruck: {$a->cmd}.';
$string['stackCas_missingRightBracket']     = 'Es fehlt eine rechte Klammer <span class="stacksyntaxexample">{$a->bracket}</span> in dem Ausdruck: {$a->cmd}.';
$string['stackCas_apostrophe']              = 'Apostroph-Zeichen sind in Rückmeldungen nicht erlaubt.';
$string['stackCas_newline']                 = 'Zeilenvorschub-Zeichen sind in Rückmeldungen nicht erlaubt.';
$string['stackCas_forbiddenChar']           = 'CAS Befehler dürfen die folgenden Zeichen nicht enthalten: {$a->char}.';
$string['stackCas_finalChar']               = '\'{$a->char}\' ist ein ungültiges Endzeichen in {$a->cmd}';
$string['stackCas_MissingStars']            = 'Anscheinend fehlen "*" Zeichen. Vielleicht meinten sie {$a->cmd}.';
$string['stackCas_unknownFunction']         = 'Unbekannte Funktion: {$a->forbid}.';
$string['stackCas_unsupportedKeyword']      = 'Nicht unterstütztes Schlüsselwort: {$a->forbid}.';
$string['stackCas_forbiddenWord']           = 'Der Ausdruck {$a->forbid} ist verboten.';
$string['stackCas_bracketsdontmatch']       = 'Die Klammern im Ausdruck sind falsch verschachtelt: {$a->cmd}.';

// Used in cassession.class.php.
$string['stackCas_CASError']                = 'Das CAS lieferte folgende Fehler zurück:';
$string['stackCas_allFailed']               = 'Das CAS lieferte keine ausgewerteten Ausdrücke zurück. Bitte überprüfen sie die Verbindung zum CAS.';
$string['stackCas_failedReturn']            = 'Das CAS lieferte keine Daten zurück.';

// Used in castext.class.php.
$string['stackCas_tooLong']                 = 'CASText Statement ist zu lang.';
$string['stackCas_MissingAt']               = 'Es fehlt ein @ Zeichen.';
$string['stackCas_MissingDollar']           = 'Es fehlt ein $ Zeichen';
$string['stackCas_MissingOpenHint']         = 'Fehlendes öffnendes hint';
$string['stackCas_MissingClosingHint']      = 'Fehlendes schließendes /hint';
$string['stackCas_MissingOpenDisplay']      = 'Fehlende \[';
$string['stackCas_MissingCloseDisplay']     = 'Fehlende \]';
$string['stackCas_MissingOpenInline']       = 'Fehlende \(';
$string['stackCas_MissingCloseInline']      = 'Fehlende \)';
$string['stackCas_MissingOpenHTML']         = 'Fehlendes öffnendes HTML Tag';
$string['stackCas_MissingCloseHTML']        = 'Fehlendes schließendes HTML Tag';
$string['stackCas_failedValidation']        = 'fehlgeschlagene CASText Validierung. ';
$string['stackCas_invalidCommand']          = 'CAS Befehle sind ungültig. ';
$string['stackCas_CASErrorCaused']          = 'verursacht durch den folgenden Fehler:';

$string['Maxima_DivisionZero']  = 'Division durch Null.';
$string['Lowest_Terms']   = 'Ihre Antwort enthält Brüche, die nicht vollständig gekürzt sind. Bitte kürzen sie entsprechende Faktoren heraus und versuchen sie er nochmal.';
$string['Illegal_floats'] = 'Ihre Antwort enthält Fließkommazahlen, welche in dieser Aufgabe nicht erlaubt sind. Bitte geben sie die Zahlen als Brüche ein. So sollten sie 1/3 und nicht 0.3333 (welche nur eine Annäherung darstellt) eingeben.';
$string['qm_error'] = 'Ihre Antwort enthält das Fragezeichen "?", welches in Anworten nicht erlaubt ist. Bitte ersetzen sie es mit konkreten Werten.';

// Answer tests.
$string['stackOptions_AnsTest_values_AlgEquiv']           =  "AlgEquiv";
$string['stackOptions_AnsTest_values_EqualComAss']        =  "EqualComAss";
$string['stackOptions_AnsTest_values_CasEqual']           =  "CasEqual";
$string['stackOptions_AnsTest_values_SameType']           =  "SameType";
$string['stackOptions_AnsTest_values_SubstEquiv']         =  "SubstEquiv";
$string['stackOptions_AnsTest_values_SysEquiv']           =  "SysEquiv";
$string['stackOptions_AnsTest_values_Expanded']           =  "Expanded";
$string['stackOptions_AnsTest_values_FacForm']            =  "FacForm";
$string['stackOptions_AnsTest_values_SingleFrac']         =  "SingleFrac";
$string['stackOptions_AnsTest_values_PartFrac']           =  "PartFrac";
$string['stackOptions_AnsTest_values_CompSquare']         =  "CompletedSquare";
$string['stackOptions_AnsTest_values_NumRelative']        =  "NumRelative";
$string['stackOptions_AnsTest_values_NumAbsolute']        =  "NumAbsolute";
$string['stackOptions_AnsTest_values_NumSigFigs']         =  "NumSigFigs";
$string['stackOptions_AnsTest_values_GT']                 =  "Num-GT";
$string['stackOptions_AnsTest_values_GTE']                =  "Num-GTE";
$string['stackOptions_AnsTest_values_LowestTerms']        =  "LowestTerms";
$string['stackOptions_AnsTest_values_Diff']               =  "Diff";
$string['stackOptions_AnsTest_values_Int']                =  "Int";
$string['stackOptions_AnsTest_values_String']             =  "String";
$string['stackOptions_AnsTest_values_StringSloppy']       =  "StringSloppy";
$string['stackOptions_AnsTest_values_RegExp']             =  "RegExp";

$string['AT_NOTIMPLEMENTED']        = 'Diese Antwortüberprüfung ist noch nicht implementiert. ';
$string['TEST_FAILED']              = 'Die Antwortüberprüfung konnte nicht korrekt ausgeführt werden. Bitte kontaktieren sie ihren Kursleiter. ';
$string['AT_MissingOptions']        = 'Fehlende Option bei der Antwortüberprüfung. ';
$string['AT_InvalidOptions']        = 'Das Optionsfeld ist ungültig. {$a->errors}';

$string['ATAlgEquiv_SA_not_expression'] = 'Ihre Antwort sollte ein Ausdruck und keine Gleichung/Ungleichung/Liste/Menge/Matrix sein. ';
$string['ATAlgEquiv_SA_not_matrix']     = 'Ihre Anwort sollte eine Matrix sein, ist es aber nicht. ';
$string['ATAlgEquiv_SA_not_list']       = 'Ihre Antwort sollte eine Liste sein, ist es aber nicht. Beachten sie die Syntax: In einer Liste wird die Auflistung der Elemente (jeweils durch Kommata getrennt) mit geschweiften Klammern eingeschlossen. ';
$string['ATAlgEquiv_SA_not_set']        = 'Ihre Antwort sollte eine Menge sein, ist es aber nicht. Beachten sie die Syntax: In einer Menge wird die Auflistung der Elemente (jeweils durch Kommata getrennt) mit geschweiften Klammern eingeschlossen. ';
$string['ATAlgEquiv_SA_not_equation']   = 'Ihre Anwort sollte eine Gleichung sein, ist es aber nicht. ';
$string['ATAlgEquiv_TA_not_equation']   = 'Ihre Antwort ist eine Gleichung, aber der Ausdruck, mit dem verglichen wird, ist es nicht. Vielleicht haben sie etwas wie "y=2*x+1" getippt, aber es sollte nur "2*x+1" eingegeben werden. ';
$string['ATAlgEquiv_SA_not_inequality'] = 'Ihre Anwort sollte eine Ungleichung sein, ist es aber nicht. ';
$string['Subst']                        = 'Ihre Antwort wäre richtig, wenn man die folgende Variablensubstitution vornimmt. {$a->m0} ';


$string['ATInequality_nonstrict']       = 'Ihre Ungleichung sollte strikt/streng sein! ';
$string['ATInequality_strict']          = 'Ihre Ungleichung sollte nicht strikt/streng sein! ';
$string['ATInequality_backwards']       = 'Ihre Ungleichung ist falschherum. ';

$string['ATLowestTerms_wrong']          = 'Sie müssen die Brüche in ihrer Antwort eliminieren. ';
$string['ATLowestTerms_entries']        = 'Die folgenden Ausdrücke sind nicht vollständig gekürzt. {$a->m0} Bitte versuchen sie es noch einmal.  ';


$string['ATList_wronglen']          = 'Ihre Liste sollte {$a->m0} Elemente enthalten, sie hat aber {$a->m1}. ';
$string['ATList_wrongentries']      = 'Die roten Einträge unten sind die Korrekten. {$a->m0} ';

$string['ATMatrix_wrongsz']         = 'Ihre Matrix sollte die Größe {$a->m0} x {$a->m1} haben, sie ist aber vom Typ {$a->m2} x {$a->m3}. ';
$string['ATMatrix_wrongentries']    = 'Die roten Einträge unten sind die Korrekten. {$a->m0} ';

$string['ATSet_wrongsz']            = 'Ihre Menge sollte {$a->m0} verschiedene Elemente enthalten, sie hat aber {$a->m1} Elemente. ';
$string['ATSet_wrongentries']       = 'Die folgenden Einträge sind falsch, auch wenn sie in einer vereinfachten Form (im Vergleich zu ihrer Eingabe) erscheinen. {$a->m0} ';

$string['irred_Q_factored']         = 'Der Term {$a->m0} sollte ausmultipliziert werden. ';
$string['irred_Q_commonint']        = 'Sie müssen noch einen gemeinsamen Faktor ausklammern. ';  // Needs a space at the end.
$string['irred_Q_optional_fac']     = 'Sie könnten noch etwas vereinfachen, so kann {$a->m0} weiter faktorisiert werden. Allerdings ist dies nicht verlangt. ';

$string['FacForm_UnPick_morework']  = 'Sie könnten noch etwas an dem Term {$a->m0} arbeiten. ';
$string['FacForm_UnPick_intfac']    = $string['irred_Q_commonint'];

$string['ATFacForm_error_list']     = 'Die Antwortüberprüfung ist fehlgeschlagen. Bitte konktaktieren sie ihren Systemadministrator.';
$string['ATFacForm_error_degreeSA'] = 'Das CAS konnte den algebraischen Grad ihrer Antwort nicht ermitteln.';
$string['ATFacForm_isfactored']     = 'Ihre Anwort ist faktorisiert. Gut gemacht!. ';  // Needs a space at the end.
$string['ATFacForm_notfactored']    = 'Ihre Antwort ist nicht faktorisiert. '; // Needs a space at the end.
$string['ATFacForm_notalgequiv']    = 'Ihre Antwort ist nicht algebraisch äquivalent zur korrekten Antwort. Sie haben etwas falsch gemacht. '; // needs a space at the end.

$string['ATPartFrac_error_list']        = $string['ATFacForm_error_list'];
$string['ATPartFrac_true']              = '';
$string['ATPartFrac_single_fraction']   ='Ihre Antwort ist ein einzelner Bruch, es muss aber ein partieller Bruch sein. ';
$string['ATPartFrac_diff_variables']    ='Verwenden sie in ihrer Antwort die Variablen aus der Aufgabenstellung!';
$string['ATPartFrac_denom_ret']         ='Schreibt man ihre Antwort als einen einzelnen Bruch, so lautet der Nenner: {$a->m0}. Allerdings wäre {$a->m1} richtig. ';
$string['ATPartFrac_ret_expression']    ='Ihre Antwort als einzelner Bruch lautet: {$a->m0} ';

$string['ATSingleFrac_error_list']     = $string['ATFacForm_error_list'];
$string['ATSingleFrac_true']           = '';
$string['ATSingleFrac_part']           = 'Ihre Antwort muss ein einzelner Bruch der Form \( {a}\over{b} \) sein. ';
$string['ATSingleFrac_var']            = 'Verwenden sie in ihrer Antwort die Variablen aus der Aufgabenstellung!';
$string['ATSingleFrac_ret_exp']        = 'Ihre Antwort ist nicht algebraisch äquivalent zur korrekten Antwort. Sie haben etwas falsch gemacht.';
$string['ATSingleFrac_div']            = 'Ihre Antwort enthält Brüche innerhalb von Brüchen. Bitte vereinfachen sie dies zu einem einzelnen Bruch.';

$string['ATCompSquare_true']            = '';
$string['ATCompSquare_false']           = '';
$string['ATCompSquare_not_AlgEquiv']    = 'Ihre Antwort scheint in der richtigen Form zu sein, ist aber nicht äquivalent zur korrekten Antwort.';
$string['ATCompSquare_false_no_summands']     = 'Das vollständige Quadrat ist von der Form \( a(\cdots\cdots)^2 + b\) wobei \(a\) und \(b\) nicht von ihrer Variablen abhängen. Mehr als eine ihrer Summanden scheint von der Variablen aus ihrer Antwort abzuhängen.';


$string['ATInt_error_list']         = $string['ATFacForm_error_list'];
$string['ATInt_const_int']          = 'Sie müssen eine Konstante bei der Stammfunktion angeben. Dies sollte eine beliebige Konstante sein und kein fester Wert.';
$string['ATInt_const']              = 'Sie müssen eine Konstante bei der Stammfunktion angeben. Ansonsten sieht alles richtig aus. Gut gemacht!';
$string['ATInt_EqFormalDiff']       = 'Die formale Ableitung ihrer Antwort stimmt mit den Ausdruck überein, den sie laut Aufgabenstellung integrieren sollten. Allerdings weicht ihre Antwort signifikant von der richtigen Antwort ab (d.h. nicht nur eine unterschiedliche Konstante). Bitte fragen sie bei ihrem Kursleiter nach.';
$string['ATInt_wierdconst']         = 'Die formale Ableitung ihrer Antwort stimmt mit den Ausdruck überein, den sie laut Aufgabenstellung integrieren sollten. Allerdings ist die Konstante merkwürdig. Bitte fragen sie bei ihrem Kursleiter nach.';
$string['ATInt_diff']               = 'Vermutlich haben sie stattdessen abgeleitet!';
$string['ATInt_generic']            = 'Die formale Ableitung ihrer Antwort sollte mit den Ausdruck übereinstimmen, den sie laut Aufgabenstellung integrieren sollten: Also {$a->m0}. Aber die Ableitung ihrer Antwort nach {$a->m1} ist: {$a->m2}. Daher haben sie etwas falsch gemacht!';

$string['ATDiff_error_list']        = $string['ATFacForm_error_list'];
$string['ATDiff_int']               = 'Vermutlich haben sie stattdessen integriert!';

$string['ATNumSigFigs_error_list']        = $string['ATFacForm_error_list'];
$string['ATNumSigFigs_NotDecimal']  = 'Ihre Antwort sollte eine Dezimalzahl sein; ist sie aber nicht! ';
$string['ATNumSigFigs_Inaccurate']  = 'Die Genauigkeit ihrer Antwort ist nicht korrekt. Entweder haben sie das Endergebnis oder einen Zwischenwert falsch gerundet.';
$string['ATNumSigFigs_WrongDigits'] = 'Ihre Antwort hat die falsche Anzahl an Dezimalstellen.. ';

$string['ATSysEquiv_SA_not_list']               = 'Ihre Antwort sollte eine Liste sein; ist sie aber nicht!';
$string['ATSysEquiv_SB_not_list']               = 'Die Antwort des Kursleiters ist keine Liste. Bitte kontaktieren sie ihren Kursleiter.';
$string['ATSysEquiv_SA_not_eq_list']            = 'Ihre Antwort sollte eine Liste von Gleichungen sein; ist sie aber nicht!';
$string['ATSysEquiv_SB_not_eq_list']            = 'Die Antwort des Kursleiters ist keine Liste von Gleichungen';
$string['ATSysEquiv_SA_not_poly_eq_list']       = 'Eine oder mehrere Gleichungen sind keine Polynomgleichungen!';
$string['ATSysEquiv_SB_not_poly_eq_list']       = 'Die Antwort des Kursleiters sollte eine Liste von Polynomialgleichungen sein; ist sie aber nicht. Bitte kontaktiere sie ihren Kursleiter.';
$string['ATSysEquiv_SA_missing_variables']      = 'In ihre Antwort fehlen eine oder mehrere Variablen!';
$string['ATSysEquiv_SA_extra_variables']        = 'Ihre Antwort enthält zuviele Variablen!';
$string['ATSysEquiv_SA_system_underdetermined'] = 'Die Gleichungen in ihrem System scheinen korrekt zu sein, allerdings fehlen noch weitere.';
$string['ATSysEquiv_SA_system_overdetermined']  = 'Die roten Einträge unten sind die Korrekten. {$a->m0} ';

$string['studentValidation_yourLastAnswer']  = 'Ihre letzte Antwort wurde folgendermaßen interpretiert:';
$string['studentValidation_invalidAnswer']   = 'Diese Antwort ist ungültig. ';
$string['stackQuestion_noQuestionParts']        = 'Dieses Element hat keine Frageteile zum beantworten.';

// Documentation strings.
$string['stackDoc_404']                 = 'Fehler 404';
$string['stackDoc_docs']                = 'STACK Dokumentation';
$string['stackDoc_docs_desc']           = '<a href="{$a->link}">Dokumentation von STACK</a>: Lokales (umveränderliches) Wiki.';
$string['stackDoc_home']                = 'Dokumentation Anfang';
$string['stackDoc_index']               = 'Kategorieindex';
$string['stackDoc_parent']              = 'Vorheriges';
$string['stackDoc_siteMap']             = 'Site map';
$string['stackDoc_404message']          = 'Datei nicht gefunden.';
$string['stackDoc_directoryStructure']  = 'Verzeichnisstruktur';
