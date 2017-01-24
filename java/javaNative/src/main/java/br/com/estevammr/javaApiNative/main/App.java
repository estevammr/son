package br.com.estevammr.javaApiNative.main;

import br.com.estevammr.javaApiNative.main.default_code.Default;
import br.com.estevammr.javaApiNative.main.private_code.Private;
import br.com.estevammr.javaApiNative.main.public_code.Public;

import java.io.*;
import java.lang.annotation.Annotation;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class App 
{
    public static void main( String[] args )
    {
        Map<Integer, String> map = new HashMap<Integer, String>();

        map.put(0, "Estevam");
        map.put(1, "Natalia");

        System.out.println(map.toString());

        /*List<String> list = new ArrayList<String>();

        list.add(0, "Estevam");
        list.add(1, "Natalia");

        System.out.println(list.get(0));*/
        /*File file;
        FileOutputStream fop;
        FileInputStream fis;
        BufferedInputStream bis = null;
        DataInputStream dis = null;
        BufferedReader br;
        try{
            file = new File("test.txt");

            if (file.createNewFile()) {
                System.out.println("File is created");
            } else {
                System.out.println("File already exists");
            }

            fop = new FileOutputStream(file);

            if(!file.exists()) {
                file.createNewFile();
            }

            String text = "Hello. I'm Estevam and I'm studying in SON.";

            byte[] textBytes = text.getBytes();

            fop.write(textBytes);
            fop.flush();
            fop.close();

            System.out.println("Done.");
            System.out.println("Preparing to read...");

            fis = new FileInputStream(file);
            bis = new BufferedInputStream(fis);
            dis = new DataInputStream(bis);

            while(dis.available() != 0) {
                System.out.println(dis.readLine());
            }

            fis.close();
            bis.close();
            dis.close();
        } catch (IOException ex) {
            ex.printStackTrace();
        }*/

        /*try{
            String currentLine;

            br = new BufferedReader(new FileReader("test.txt"));

            while((currentLine = br.readLine()) != null) {
                System.out.println(currentLine);
            }

            if(br != null) {
                br.close();
            }
        } catch (IOException ex1) {
            ex1.printStackTrace();
        }*/
        //Object obj = new Object();
        //Public publicCode = new Public();

        /*Class<Public> obj = Public.class;

        if (obj.isAnnotationPresent(Info.class)) {
            Annotation annotation = obj.getAnnotation(Info.class);
            Info info = (Info) annotation;

            System.out.println(info.createdBy());
        }
        //System.out.println(obj.toString());
        System.out.println(publicCode.toString());*/
        //System.out.println( "Hello World!" );
    }
}
