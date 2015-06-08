/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Datos;

import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlType;

/**
 *
 * @author devweb
 */

@XmlType(propOrder={"id_mun", "id_prov", "municipio"})
public class municipios {
    
    protected int id_mun, id_prov;
    protected String municipio;

    @XmlElement(name="id_mun")
    public int getId_mun() {
        return id_mun;
    }

    public void setId_mun(int id_mun) {
        this.id_mun = id_mun;
    }

    @XmlElement(name="id_prov")
    public int getId_prov() {
        return id_prov;
    }

    public void setId_prov(int id_prov) {
        this.id_prov = id_prov;
    }

    @XmlElement(name="municipio")
    public String getMunicipio() {
        return municipio;
    }

    public void setMunicipio(String municipio) {
        this.municipio = municipio;
    }

    public municipios(int id_mun, int id_prov, String municipio) {
        this.id_mun = id_mun;
        this.id_prov = id_prov;
        this.municipio = municipio;
    }
    
    
    
}
