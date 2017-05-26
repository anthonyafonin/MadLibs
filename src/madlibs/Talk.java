/*
* Programmer: Afonin, Anthony
* Chemeketa Community College
* Created: Tuesday, May 9, 2017 3:42:44 PM
* Assignment: Week 5, MadLib
* File Name: Talk.java
 */
/**
 * This application tells three different MadLib stories with voice.
 */
package madlibs;

import com.sun.speech.freetts.ValidationException;
import com.sun.speech.freetts.Voice;
import com.sun.speech.freetts.audio.JavaClipAudioPlayer;
import com.sun.speech.freetts.en.us.CMULexicon;
import de.dfki.lt.freetts.en.us.MbrolaVoice;
import de.dfki.lt.freetts.en.us.MbrolaVoiceValidator;

/**
 * A text to speech class.
 */
public class Talk 
{
    
    public static void speaker(String aString)
    {
        try
        {
            String voiceClassName
                = "com.sun.speech.freetts.en.us.CMUDiphoneVoice";
            Class voiceClass = Class.forName(voiceClassName);

            // instantiate the Voice			
            Voice helloVoice = (Voice) voiceClass.newInstance();


            if (helloVoice instanceof MbrolaVoice)
            {
                try
                {
                    (new MbrolaVoiceValidator((MbrolaVoice) helloVoice)).
                        validate();
                }
                catch (ValidationException ve)
                {
                    System.err.println(ve.getMessage());
                    throw new IllegalStateException(
                            "Problem starting MBROLA voice");
                }
            }

            // sets the lexicon to CMU lexicon			
            helloVoice.setLexicon(new CMULexicon());

            // sets the AudioPlayer to the Java clip player
            helloVoice.setAudioPlayer(new JavaClipAudioPlayer());

            // sets the pitch of the voice based up a float, the higher the
            // value, the higher the pitch
            helloVoice.setPitch(80.0f);
            
            // sets the speaking rate words per minute as a float
            helloVoice.setRate(120.0f);
            
            // loads the Voice, which mainly is loading the lexicon
            helloVoice.load();

            // does the text-to-speech
            helloVoice.speak(aString);

        }
        catch (Exception e)
        {
            e.printStackTrace();
        }
    }
}
