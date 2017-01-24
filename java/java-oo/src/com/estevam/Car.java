package com.estevam;

/**
 * Created by estev_000 on 26/09/2016.
 */
public class Car extends Vehicle {
    private Integer shifts;

    public Car(){
        super();
    }

    public Car(String color, Double topSpeed){
        super(color, topSpeed);
    }

    public Integer getShifts(){
        return this.shifts;
    }

    public void setShifts(Integer shifts){
        this.shifts = shifts;
    }

    public void methodOverriding(){
        System.out.println("Method child");
    }
}
