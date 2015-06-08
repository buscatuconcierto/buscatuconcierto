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
@XmlRootElement(name = "municipios") 
public class Gmunicipios{
protected ArrayList<municipios> listado;

public Gmunicipios(){ 
listado = new ArrayList(); 
}

public Gmunicipios( ArrayList<municipios> lista ){
listado = lista; 
}

@XmlElement (name = "municipio") // tag per separar els sales del grup
public void setGrupmunicipios ( ArrayList<municipios> lista ){ 
listado = lista; 
}

public ArrayList<municipios> getGrupmunicipios (){ 
return listado; 
}

public municipios getmunicipios ( int pos ){ 
return listado.get(pos); 
}

public void setmunicipios ( municipios mun ){ 
listado.add (mun); 
}

public int nummunicipios (){ 
return listado.size(); 
}
    
}