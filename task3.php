<? php

class autosalon
{
  public name;
  public adress;
  public phone; 
  private count;

  public function GetInfo()
  {
  print(name);
  print(adress);
  print(phone);
  }

  public function GetNumberOfCar()
  {
    count = get(AllNumberOfCar);
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

public function getName()
  {
  print(name+" "mark+" "classauto+" "+place+" "year)
  }

public function getPrice()
  {
  print("price")
  }
 
  public function ViewPhoto()
  {
    print(photo);
  }
}

class NewCar extends car
{
  public SellingPlace;
  public Garanty;

  public function WiewGaranty()
  {
    Garanty = year + 10;
  }

  public function GetSellingPlace()
  {
    SellingPlace = place.autosalon -> adress;  
  }
}

class NewProfienceCar extends NewCar
{
  public ProdutctionZone;
  public Specialization;
  public Weight;

public function GetSpecialization()
{
  print(Specialization + Production);
}
}

class UsedCar extends car
{
  public Roading;
  public FirstPrice;
  public RepairNumber;
  public SellerPhone;

public function GetOldPrice()
{
  print(FirstPrice);
}

public function GetSellingPrice()
{
  SellingPrice = price + 0.5*price;
}
}

class UsedProfienceCar extends NewProfienceCar
{
  public Roading;
  public FirstPrice;
  public RepairNumber;
  public SellerPhone;

public function GetOldPrice()
{
  print(FirstPrice);
}

public function GetSellingPrice()
{
  SellingPrice = price + 0.5*price;
}
}

class Client
{
  public number;
  public FIO;
  public phone;
  public GetautoservInfo;
  public BuyingCarNumber;

function GetClientInfo()
{
  print(number+""+FIO+" "+phone+" "+GetautoservInfo)
}

function GetBuyingCarNumber()
{
  BuyingCarNumber= car -> number;
}
}