package com.estevam;

/**
 * Created by estev_000 on 24/09/2016.
 */
public class Person implements IPerson{
    private String name;
    private Integer age;
    private String cpf;

    public Person(){

    }

    public Person(String name, Integer age, String cpf){
        this.name = name;
        this.age = age;
        this.cpf = cpf;
    }

    public String getName(){
        return this.name;
    }

    public void setName(String name){
        this.name = name;
    }

    public Integer getAge(){
        return this.age;
    }

    public void setAge(Integer age){
        this.age = age;
    }

    public String getCpf(){
        return this.cpf;
    }

    public void setCpf(String cpf){
        this.cpf = cpf;
    }

    public String walk(String msg){
        return msg;
    }

    public String walk(String msg, Integer number){
        return msg + " " + number.toString();
    }

    @Override
    public void method1(){

    }

    @Override
    public void method2(){

    }

    @Override
    public void method3(){

    }

    /*public void say(){
        System.out.println("I'm saying something...");
    }

    public static String walk(){
        return "I'm walking...";
    }*/
}
