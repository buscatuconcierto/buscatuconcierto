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

@XmlType(propOrder={"nombre", "direccion", "poblacion", "codigo_postal", "provincia", "pais", "aforo", "mapa", "parking", "hoteles"})
public class ubicacion {
    
    protected String nombre, direccion, poblacion, codigo_postal, provincia, pais, aforo, mapa, parking, hoteles;

    @XmlElement(name="nombre")
    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    @XmlElement(name="direccion")
    public String getDireccion() {
        return direccion;
    }

    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }

    @XmlElement(name="poblacion")
    public String getPoblacion() {
        return poblacion;
    }

    public void setPoblacion(String poblacion) {
        this.poblacion = poblacion;
    }

    @XmlElement(name="codigo_postal")
    public String getCodigo_postal() {
        return codigo_postal;
    }

    public void setCodigo_postal(String codigo_postal) {
        this.codigo_postal = codigo_postal;
    }

    @XmlElement(name="provincia")
    public String getProvincia() {
        return provincia;
    }

    public void setProvincia(String provincia) {
        this.provincia = provincia;
    }

    @XmlElement(name="pais")
    public String getPais() {
        return pais;
    }

    public void setPais(String pais) {
        this.pais = pais;
    }

    @XmlElement(name="aforo")
    public String getAforo() {
        return aforo;
    }

    public void setAforo(String aforo) {
        this.aforo = aforo;
    }

    @XmlElement(name="mapa")
    public String getMapa() {
        return mapa;
    }

    public void setMapa(String mapa) {
        this.mapa = mapa;
    }

    @XmlElement(name="parking")
    public String getParking() {
        return parking;
    }

    public void setParking(String parking) {
        this.parking = parking;
    }

    @XmlElement(name="hoteles")
    public String getHoteles() {
        return hoteles;
    }

    public void setHoteles(String hoteles) {
        this.hoteles = hoteles;
    }

    public ubicacion(String nombre, String direccion, String poblacion, String codigo_postal, String provincia, String pais, String aforo, String mapa, String parking, String hoteles) {
        this.nombre = nombre;
        this.direccion = direccion;
        this.poblacion = poblacion;
        this.codigo_postal = codigo_postal;
        this.provincia = provincia;
        this.pais = pais;
        this.aforo = aforo;
        this.mapa = mapa;
        this.parking = parking;
        this.hoteles = hoteles;
    }
    
    
    
}
