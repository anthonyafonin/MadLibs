/*
* Programmer: Afonin, Anthony
* Chemeketa Community College
* Created: Tuesday, May 9, 2017 3:42:44 PM
* Assignment: Week 5, MadLib
* File Name: MadLibs.java
 */
/**
 * This application tells three different MadLib stories with voice.
 */
package madlibs;

import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.scene.text.Font;
import javafx.scene.text.Text;
import javafx.scene.text.TextAlignment;
import javafx.scene.text.TextFlow;
import javafx.stage.Stage;

/**
 * An application that tells three different MadLib stories.
 * The user picks 1 of 3 stories and inputs a variety of words.
 * The story is then shown and has the option to be spoken.
 */
public class MadLibs extends Application 
{
    // Declare scenes and widgets
    Scene sceneMain, sceneForm, textFlowScene;
    Button btnLib1, btnLib2, btnLib3, btnStart, btnClear, btnBack, btnSpeak;
    TextFlow outputFlow;
    Text finalOutput;
    
    // Declare arrays of labels, strings, and textFields
    Label[] labels;
    String[] libLabels, userInput;
    TextField[] textFields;
    
    // Declare variables
    int selection;
    String output, textFlowContent, madLib1, madLib2, madLib3;
    
    // Create new Talk object 
    Talk speaker = new Talk();

    /**
     * The start method of the application.
     * Puts the application together.
     * @param primaryStage The primary stage of the application.
     */
    @Override
    public void start(Stage primaryStage) 
    {
        // Create buttons
        btnLib1 = new Button("MadLib 1");
        btnLib2 = new Button("MadLib 2");
        btnLib3 = new Button("MadLib 3");
        btnStart = new Button("Start");
        btnClear = new Button("Clear");
        btnBack = new Button("Back");
        btnSpeak = new Button("Speak");

        // Create array of labels
        labels = new Label[10];
        for (int i = 0; i < 10; i++) 
            labels[i] = new Label();

        // Create array of textfields
        textFields = new TextField[10];
        for (int i = 0; i < 10; i++) 
            textFields[i] = new TextField("");

        // Instantiate input array
        userInput = new String[10];

        // Create TextFlow
        outputFlow = new TextFlow();

        // The concatinated string for madLib 1
        madLib1 = "I just got back from a pizza party with " + userInput[9]
                + ". Can you believe we got to eat " + userInput[1]
                + " pizza in " + userInput[6]
                + "?!\nEveryone got to choose their own toppings."
                + " I made '" + userInput[7]
                + " and " + userInput[0] + "' pizza"
                + ", which is my favorite! \nThey even stuffed the crust with "
                + userInput[8] + ". How "
                + userInput[4] + "! If that wasn't good"
                + " enough already, " + userInput[3]
                + " was there singing " + userInput[2]
                + ". I was so inspired by the music, I had to get up"
                + " out of my seat and " + userInput[5] + "!\n";

        
        // The concatinated string for madLib 2
        madLib2 = "Hi my name is " + userInput[7] + ", but my friends call me "
                + userInput[2] + " " + userInput[0]
                + ". My favorite color is the " + "color of "
                + userInput[9] + " and my favorite thing to do is "
                + userInput[5] + ".\nMy parents were a "
                + userInput[4] + " and " + userInput[1]
                + ", which is why we lived in " + userInput[6]
                + ".\nYou probably know me from my TV commercial for "
                + userInput[8] + ".\nI'm the one who says, '" + userInput[3]
                + "' at the very end!\n";

        // The concatinated string for madLib 3
        madLib3 = "Last night I dreamed I was a " + userInput[8]
                + " butterfly with " + userInput[4]
                + " splotches that looked like " + userInput[0]
                + ". I flew to " + userInput[9] + " with my best friend, "
                + userInput[7] + ", who was a " + userInput[5] + " " 
                + userInput[1] + ".\nWe ate " + "some " + userInput[6]
                + " when we got there and then decided to " + userInput[2]
                + ".\nThe dream ended when I said, '"
                + userInput[3] + "!'\n";

        btnLib1.setOnAction(new EventHandler<ActionEvent>() 
        {
           /**
            * Action Listener for MadLib 1 button.
            * Displays user input form and changes labels accordingly.
            * @param event The ActionEvent
            */
            @Override
            public void handle(ActionEvent event) 
            {
                // Call the changeLAbels method with parameter of 1.
                selection = 1;
                changeLabels(selection);

                // Set the scene to the user input form
                primaryStage.setScene(sceneForm);
            }
        });

        btnLib2.setOnAction(new EventHandler<ActionEvent>()
        {
           /**
            * Action Listener for MadLib 2 button.
            * Displays user input form and changes labels accordingly.
            * @param event The ActionEvent
            */
            @Override
            public void handle(ActionEvent event) 
            {
                // Call the changeLabels method with parameter of 2.
                selection = 2;
                changeLabels(selection);

                // Set the scene to the user input form
                primaryStage.setScene(sceneForm);
            }
        });

        btnLib3.setOnAction(new EventHandler<ActionEvent>()
        {
           /**
            * Action Listener for MadLib 3 button.
            * Displays user input form and changes labels accordingly.
            * @param event The ActionEvent
            */
            @Override
            public void handle(ActionEvent event) 
            {
                // Call the changeLabels method with parameter of 2.
                selection = 3;
                changeLabels(selection);

                // Set the scene to the user input form
                primaryStage.setScene(sceneForm);
            }
        });

       
        btnStart.setOnAction(new EventHandler<ActionEvent>() 
        {
           /**
            * Action Listener for Start button.
            * Saves user input and creates a textFlow with the final madLib.
            * @param event The ActionEvent
            */
            @Override
            public void handle(ActionEvent event) 
            {
                // Call saveInput method, stores user input
                saveInput();

                // Changes the output string of correlating madLib selection
                switch (selection) 
                {
                    case 1:
                        output = madLib1;
                        break;
                    case 2:
                        output = madLib2;
                        break;
                    case 3:
                        output = madLib3;
                        break;
                    default:
                        break;
                }

                // Set actionlistener to Speak button with speak method
                btnSpeak.setOnAction(e -> speak(output));
                
                // Create textFlow of the concatenated string to Text
                finalOutput = new Text(output);
                TextFlow textFlow = new TextFlow(finalOutput, btnSpeak);
                textFlow.setTextAlignment(TextAlignment.CENTER);
                textFlow.setLineSpacing(10);
                textFlowScene = new Scene(textFlow, 500, 250);
                
                // Create new stage for output textFlow
                Stage dialogStage = new Stage();
                dialogStage.setTitle("MadLib " + selection);
                dialogStage.setScene(textFlowScene);
                dialogStage.show();
            }
        });

        //////////////////////////////////////////////////////////////////
        //Scene where user selects madlib 1, 2, or 3
        /////////////////////////////////////////////////////////////////
        
        // Set scene label and font
        Label title = new Label("Mad Libs");
        title.setFont(new Font("Serif", 40));
        
        // Button action listeners for Back and Clear
        btnBack.setOnAction(e -> primaryStage.setScene(sceneMain));
        btnClear.setOnAction(e -> clearText());

        // Splash screen layouts
        BorderPane layout1 = new BorderPane();
        layout1.setCenter(title);
        HBox buttons = new HBox(20);
        buttons.getChildren().addAll(btnLib1, btnLib2, btnLib3);
        layout1.setBottom(buttons);
        buttons.setAlignment(Pos.BOTTOM_CENTER);
        buttons.setPadding(new Insets(10, 10, 50, 10));

        sceneMain = new Scene(layout1, 320, 250);

        //////////////////////////////////////////////////////////////////
        //Scene with user input form
        /////////////////////////////////////////////////////////////////
        
        // Layout for input form
        BorderPane layout = new BorderPane();

        // Position buttons in HBox inside bottom BorderPane
        HBox btns = new HBox(10);
        btns.getChildren().addAll(btnStart, btnClear, btnBack);
        layout.setBottom(btns);
        btns.setAlignment(Pos.BOTTOM_CENTER);
        btns.setPadding(new Insets(20, 10, 20, 10));

        // Position labels in VBox inside center BorderPane
        VBox lbls = new VBox(20);
        for (int i = 0; i < 10; i++) 
            lbls.getChildren().add(labels[i]);
        lbls.setAlignment(Pos.TOP_RIGHT);
        lbls.setPadding(new Insets(25, 10, 0, 50));

        // Position text fiels in vbox inside center borderpane
        VBox txts = new VBox(10);
        for (int i = 0; i < 10; i++) 
            txts.getChildren().add(textFields[i]);
        txts.setAlignment(Pos.TOP_LEFT);
        txts.setPadding(new Insets(20, 30, 10, 10));

        // Align each Vbox side by side in an HBox
        HBox form = new HBox(10);
        form.getChildren().addAll(lbls, txts);
        layout.setCenter(form);

        sceneForm = new Scene(layout, 400, 500);

        // Show the stage with sceneMain
        primaryStage.setTitle("MadLibs");
        primaryStage.setScene(sceneMain);
        primaryStage.show();
    }
    
    /**
     * Clears each index of textFields and userInput arrays.
     */
    public void clearText()
    {
        for (int i = 0; i < 10; i++) 
        {
            userInput[i] = "";
            textFields[i].clear();   
        }
    }

    /**
     * Sets each index of the textField array into the userInput array.
     */
    public void saveInput() 
    {
        for (int i = 0; i < 10; i++) 
            userInput[i] = textFields[i].getText();    
    }

    /**
     * Sets the array of labels according to the selection made.
     * @param madLib The madLib selection, 1 2 or 3.
     */
    public void changeLabels(int madLib) 
    {
        switch (madLib) 
        {
            case 1:
                libLabels = new String[]{
                    "Noun (Plural):", "Adjective:", "Song Title:", "Celebrity:",
                    "Feeling:", "Verb:", "Place:", "A Food:",
                    "Noun (Plural):", "A Person:"};
                break;
            case 2:
                libLabels = new String[]{
                    "A Food:", "Profession:", "Adjective:", "Phrase:",
                    "Animal:", "Verb:", "Place:", "Celebrity:",
                    "Item:", "Noun (Plural):"};
                break;
            case 3:
                libLabels = new String[]{
                    "Noun (Plural):", "Insect:", "Verb:", "Phrase:",
                    "Color:", "Adjective:", "A Food:", "A Person:",
                    "Adjective:", "Place:"};
                break;
            default:
                break;
        }
        
        // Set labels[] with correlating libLabels[]
        for (int i = 0; i < 10; i++) 
            labels[i].setText(libLabels[i]);  
    }

    /**
     * Calls the speaker method from Talk class.
     * Text to speech method.
     * @param outputSpeak The final output story that will be spoken.
     */
    public void speak(String outputSpeak) 
    {
        speaker.speaker(outputSpeak);
    }

    /**
     * The main method.
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        launch(args);
    }
}
