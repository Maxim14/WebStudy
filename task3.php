<? php

class autosalon
{
  public name;
  public adress;
  public phone; 
  private count;

  public function GetInfo()
  {
  	fioinfo =  this.name + " " +this.adress+ " "+this.phone;
  	return fioinfo;
  }

  public function GetNumberOfCar()
  {
    count = get(this.AllNumberOfCar);
    return count;
  }
}   

abstract class car
{
 protected counter;
 protected name;
 protected mark;
 protected price;
 protected year;
 protected place;
 protected classauto;
 protected photo;
 protected test = false;

public function getInfo()
  {
  infostr = this.name+" "this.mark+" "this.classauto+" "+this.place+" "this.year;
  return infostr;
  }

 public function getPrice()
  {
  return this.price
  }
 
  public function ViewPhoto()
  {
    print(this.photo);
  }
}

class NewCar extends car
{
  protected SellingPlace;
  protected Garanty;

  public function WiewGaranty()
  {
    this.Garanty = this.year + 10;
    return this.Gatanty;
  }

  public function GetSellingPlace()
  {
    this.SellingPlace = place.autosalon -> adress;  
    return this.SellingPlace;
  }
}

class NewProfienceCar extends NewCar
{
  protected ProdutctionZone;
  protected Specialization;
  protected Weight;
  protected SpecilizationInfo;

public function GetSpecialization()
{
  this.SpecilizationInfo = this.Specialization + " "+this.Production;
}
}

class UsedCar extends car
{
  protected Roading;
  protected FirstPrice;
  protected RepairNumber;
  protected SellerPhone;

public function GetOldPrice()
{
  return this.FirstPrice;
}

public function GetSellingPrice()
{
  SellingPrice = price + 0.5*price;
  return SellingPrice;
}
}

class UsedProfienceCar extends NewProfienceCar
{
  protected Roading;
  protected FirstPrice;
  protected RepairNumber;
  protected SellerPhone;

public function GetOldPrice()
{
  return this.FirstPrice;
}

public function GetSellingPrice()
{
  this.SellingPrice = this.price + 0.5*price;
  return this.SellingPrice;
}
}

class Client
{
  protected number;
  protected FIO;
  protected phone;
  protected id[];
  protected countprot = 0;
  protected str;

public function GetClientInfo()
{
  return this.number+""+this.FIO+" "+this.phone+" "+this.GetautoservInfo)
}

public function GetProtocolID()
{
  this.id[countprot]= this.protocol -> this.number;
  return this.id[countprot];
  this.countprot++;

}     
}

class protocol
{
protected protocol;
protected GetautoservInfo;
protected BuyingCarNumber;
protected Cost;
protected Time;

public function GetBuyingCarNumber()
{
  this.BuyingCarNumber= car.GetInfo();
  return this.BuyingCarNumber;
}

public function GetSellingCarNumber()
{
  this.SellingCarNumber= car.GetInfo();;
  return this.SellingCarNumber;
}

public function TestDrive()
{
  this.test = true;
}

public function RepairPrice()
{
 this.Cost = car -> price; * 0.5 + price;
 return this.Cost;
}

}