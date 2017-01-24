package com.estevam;

/**
 * Created by estev_000 on 26/09/2016.
 */
public class CarComposition {
    private Vehicle vehicle = new Vehicle();

    public Vehicle getVehicle(){
        return this.vehicle;
    }

    public void setVehicle(Vehicle vehicle){
        this.vehicle = vehicle;
    }
}
