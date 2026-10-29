The system's architecture must address the following:

**1. Communication:**

* **Medium:**  A decentralized, low-latency communication medium is required.  Options include:
    * **Directed Acyclic Graph (DAG) based protocols:**  Offer resilience to single points of failure and scalability.
    * **Gossip protocols:**  Efficient for disseminating information in a distributed manner.
* **Content:**  Messages should be structured to convey:
    * **Resource availability/demand:**  Quantifiable metrics (CPU, memory, bandwidth) with associated location and time-stamps.
    * **Task descriptions:**  Including required resources, deadlines, and potential rewards.
    * **Agent status:**  Operational status, current workload, and communication capabilities.

**2. Coordination:**

* **Decentralized Decision Making:**  Avoid reliance on a central authority. Implement algorithms like:
    * **Market-based mechanisms:**  Agents trade resources based on supply and demand, incentivizing efficient allocation.
    * **Contract-based systems:**  Agents agree on task execution parameters and resource sharing through self-enforcing contracts.
* **Dynamic Task Allocation:**  Algorithms should adapt to:
    * **Resource fluctuations:**  Re-allocate tasks based on real-time availability.
    * **Agent capabilities:**  Match tasks to agents with optimal skillsets and resource profiles.

**3. Resilience:**

* **Fault Tolerance:**  Redundancy and replication are essential.
    * **Agent redundancy:**  Multiple agents can perform similar tasks, mitigating individual failures.
    * **Data replication:**  Resource availability and task information should be mirrored across the network.
* **Adaptive Capacity:**  The system should:
    * **Scale horizontally:**  Add new agents and computing nodes as demand increases.
    * **Re-route communication:**  Adapt to network disruptions and maintain connectivity.

**4. Efficiency:**

* **Minimized Communication Overhead:**  
    * **Data compression:**  Efficiently encode resource and task information.
    * **Selective broadcasting:**  Only relevant agents receive updates.
* **Optimized Task Scheduling:**  Minimize idle time and resource contention through:
    * **Task pipelining:**  Overlap execution of dependent tasks.
    * **Resource pooling:**  Share resources efficiently among multiple agents.


This architecture provides a framework for a robust and scalable system.  Specific implementations will depend on the nature of the tasks, the heterogeneity of the computing infrastructure, and the desired level of autonomy for individual agents.