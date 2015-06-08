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

@XmlType(propOrder={"evento", "cantidad", "precio"})
public class stock {
    
    protected String evento;
    protected int cantidad;
    protected float precio;

    @XmlElement(name="evento")
    public String getEvento() {
        return evento;
    }

    public void setEvento(String evento) {
        this.evento = evento;
    }

    @XmlElement(name="cantidad")
    public int getCantidad() {
        return cantidad;
    }

    public void setCantidad(int cantidad) {
        this.cantidad = cantidad;
    }

    @XmlElement(name="precio")
    public float getPrecio() {
        return precio;
    }

    public void setPrecio(float precio) {
        this.precio = precio;
    }

    public stock(String evento, int cantidad, float precio) {
        this.evento = evento;
        this.cantidad = cantidad;
        this.precio = precio;
    }
    
    
    
}
