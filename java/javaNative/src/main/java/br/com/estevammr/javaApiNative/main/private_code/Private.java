package br.com.estevammr.javaApiNative.main.private_code;

/**
 * Created by estev_000 on 27/09/2016.
 */
public class Private
{
    private String name;

    public Private()
    {
        System.out.println("Private class");
        print();
    }

    private void print()
    {
        System.out.println("Print private method");
    }
}
