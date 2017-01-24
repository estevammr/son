package com.estevam;

/**
 * Created by estev_000 on 26/09/2016.
 */
public class Vehicle {
    private String color;
    private Double topSpeed;

    public Vehicle(){

    }

    public Vehicle(String color, Double topSpeed){
        this.color = color;
        this.topSpeed = topSpeed;
    }

    public String getColor(){
        return this.color;
    }

    public void setColor(String color){
        this.color = color;
    }

    public Double getTopSpeed(){
        return this.topSpeed;
    }

    public void setTopSpeed(Double topSpeed) {
        this.topSpeed = topSpeed;
    }

    public void methodOverriding(){
        System.out.println("Method father");
    }
}
