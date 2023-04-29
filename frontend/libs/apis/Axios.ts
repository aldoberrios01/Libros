
import axios, { AxiosInstance } from "axios";

export class Axios{

    public axios:AxiosInstance;

    constructor(url:string|undefined){
        this.axios = axios.create({
            baseURL: url
        });
    }
}