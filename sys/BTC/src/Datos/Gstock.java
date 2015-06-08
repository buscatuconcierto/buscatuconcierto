/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Datos;

import java.util.ArrayList;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author devweb
 */
@XmlRootElement(name = "stocks") 
public class Gstock{
protected ArrayList<stock> listado;

public Gstock(){ 
listado = new ArrayList(); 
}

public Gstock( ArrayList<stock> lista ){
listado = lista; 
}

@XmlElement (name = "stock") // tag per separar els sales del grup
public void setGrupstock ( ArrayList<stock> lista ){ 
listado = lista; 
}

public ArrayList<stock> getGrupstock (){ 
return listado; 
}

public stock getstock ( int pos ){ 
return listado.get(pos); 
}

public void setstock ( stock sto ){ 
listado.add (sto); 
}

public int numstock (){ 
return listado.size(); 
}
    
}
